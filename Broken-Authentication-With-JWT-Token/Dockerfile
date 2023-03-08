FROM php:8.1-rc-apache

COPY . /var/www/html

RUN a2enmod rewrite

RUN service apache2 restart