FROM php:7.4-apache

COPY . /var/www/html/fibonacci-flix-test

WORKDIR /var/www/html/fibonacci-flix-test

EXPOSE 80
