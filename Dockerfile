FROM php:8.0-apache
WORKDIR /src
RUN docker-php-ext-install mysqli pdo pdo_mysql
RUN a2enmod rewrite