FROM php:7.2-apache
RUN docker-php-ext-install pdo pdo_mysql mysqli
COPY myapp /var/www/html/
