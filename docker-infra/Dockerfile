FROM php:7.4.11-fpm
RUN apt-get update && apt-get install -y git \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && pecl install xdebug-2.9.8 && docker-php-ext-enable xdebug
WORKDIR /var/www