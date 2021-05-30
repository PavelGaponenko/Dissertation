FROM php:7.4.11-fpm
ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/
RUN apt-get update \
    && apt-get install -y git \
    && chmod +x /usr/local/bin/install-php-extensions && sync \
    && install-php-extensions pgsql \
    && install-php-extensions pdo_pgsql \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && pecl install xdebug-2.9.8 && docker-php-ext-enable xdebug
WORKDIR /var/www