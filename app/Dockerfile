# syntax=docker/dockerfile:1
FROM php:8.2-apache
COPY .docker/apache/vhost.conf /etc/apache2/sites-available/000-default.conf
COPY code/ /var/www/html/

RUN chown -R www-data:www-data /var/www/html/ && a2enmod rewrite