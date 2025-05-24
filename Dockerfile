FROM php:8.1-apache

COPY . /var/www/html/

EXPOSE 80

WORKDIR /var/www/html 