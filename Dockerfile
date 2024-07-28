FROM php:8.3-fpm-alpine

WORKDIR /var/www/html

COPY . /var/www/html/

RUN docker-php-ext-install mysqli pdo

ENTRYPOINT ["php", "-S", "0.0.0.0:8000"]