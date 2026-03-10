#!/bin/sh

cd /var/www/localhost/htdocs

# Install PHP dependencies if vendor directory does not exist
if [ ! -d "vendor" ]; then
    echo "Installing PHP dependencies..."
    composer update --no-dev --optimize-autoloader
fi

# Start Apache
exec httpd -D FOREGROUND