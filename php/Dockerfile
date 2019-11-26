FROM php:7.2-fpm-alpine3.9
MAINTAINER Paweł Poloczek <pawel@poloczek.me>

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN docker-php-ext-install pdo pdo_mysql
RUN apk add zlib-dev && docker-php-ext-install zip
