FROM alpine:3.19

# Install Apache, PHP, required PHP extensions, and utilities
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

# Install Composer globally
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php composer-setup.php --install-dir=/usr/local/bin --filename=composer \
    && rm composer-setup.php

# Set working directory
WORKDIR /var/www/localhost/htdocs

# Copy application files
COPY . .

# Apache configuration
RUN sed -i 's/#LoadModule php_module/LoadModule php_module/' /etc/apache2/httpd.conf \
    && echo "AddHandler php-script .php" >> /etc/apache2/httpd.conf \
    && echo "DirectoryIndex index.php index.html" >> /etc/apache2/httpd.conf \
    && echo "ServerName localhost" >> /etc/apache2/httpd.conf

# Configure document root and enable rewrite
RUN sed -i 's|DocumentRoot "/var/www/localhost/htdocs"|DocumentRoot "/var/www/localhost/htdocs/app/public"|' /etc/apache2/httpd.conf \
    && sed -i 's|<Directory "/var/www/localhost/htdocs">|<Directory "/var/www/localhost/htdocs/app/public">|' /etc/apache2/httpd.conf \
    && sed -i 's/#LoadModule rewrite_module/LoadModule rewrite_module/' /etc/apache2/httpd.conf \
    && sed -i 's/AllowOverride None/AllowOverride All/' /etc/apache2/httpd.conf

# Set permissions
RUN chown -R apache:apache /var/www/localhost/htdocs/

# Copy startup script
COPY docker-entrypoint.sh /usr/local/bin/docker-entrypoint.sh
RUN chmod +x /usr/local/bin/docker-entrypoint.sh

EXPOSE 80

CMD ["docker-entrypoint.sh"]