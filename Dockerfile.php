FROM php:8.2-fpm
RUN apt-get update \
    && apt-get install -y php-fpm \
    && rm -rf /var/lib/apt/lists/*

COPY php.ini /usr/local/etc/php/php.ini