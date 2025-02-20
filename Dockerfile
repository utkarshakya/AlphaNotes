FROM alpine:3.19

# Update package index
RUN apk update

# Install Apache, PHP, required PHP extensions, and necessary tools
RUN apk add --no-cache \
    apache2 \
    php82 \
    php82-apache2 \
    php82-opcache \
    php82-json \
    php82-pdo_mysql \
    php82-phar \
    php82-iconv \
    php82-mbstring \
    php82-session \
    curl \
    unzip

# Install Composer globally with zlib output compression disabled
RUN php -d zlib.output_compression=0 -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php -d zlib.output_compression=0 composer-setup.php --install-dir=/usr/local/bin --filename=composer \
    && rm composer-setup.php

# Set working directory for Apache/PHP
WORKDIR /var/www/localhost/htdocs

# Leverage Docker cache by copying composer files first
COPY composer.json composer.lock ./

# Install PHP dependencies (production only)
RUN composer install --no-dev --optimize-autoloader

# Now copy the rest of your application files
COPY . .

# Configure Apache:
# - Enable PHP module
# - Set default index files and a global ServerName directive
RUN sed -i 's/#LoadModule php_module/LoadModule php_module/' /etc/apache2/httpd.conf \
    && echo "AddHandler php-script .php" >> /etc/apache2/httpd.conf \
    && echo "DirectoryIndex index.php index.html" >> /etc/apache2/httpd.conf \
    && echo "ServerName localhost" >> /etc/apache2/httpd.conf

# Update DocumentRoot and Directory configuration:
# Change DocumentRoot to htdocs/app/public and allow .htaccess overrides
RUN sed -i 's|DocumentRoot "/var/www/localhost/htdocs"|DocumentRoot "/var/www/localhost/htdocs/app/public"|' /etc/apache2/httpd.conf \
    && sed -i 's|<Directory "/var/www/localhost/htdocs">|<Directory "/var/www/localhost/htdocs/app/public">|' /etc/apache2/httpd.conf \
    && sed -i 's/#LoadModule rewrite_module/LoadModule rewrite_module/' /etc/apache2/httpd.conf \
    && sed -i 's/AllowOverride None/AllowOverride All/' /etc/apache2/httpd.conf

# Adjust file permissions so Apache can read your files
RUN chown -R apache:apache /var/www/localhost/htdocs/

# Expose port 80 (inside the container)
EXPOSE 80

# Start Apache in the foreground
CMD ["/usr/sbin/httpd", "-D", "FOREGROUND"]
