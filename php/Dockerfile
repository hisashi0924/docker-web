FROM php:8.3-fpm-alpine

RUN apk add --no-cache \
    postgresql-dev

RUN docker-php-ext-configure pgsql \
    && docker-php-ext-install pdo_pgsql pgsql

RUN echo "date.timezone=Asia/Tokyo" > /usr/local/etc/php/conf.d/timezone.ini

