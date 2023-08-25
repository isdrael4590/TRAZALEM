# syntax=docker/dockerfile:1
FROM php:8.2
# prepare install
RUN apt-get update --fix-missing
RUN apt-get install -y build-essential libssl-dev zlib1g-dev libpng-dev libjpeg-dev libfreetype6-dev

# install zip extension
RUN apt-get install -y libzip-dev && docker-php-ext-install zip

# install mysql extension
RUN docker-php-ext-install mysqli pdo pdo_mysql
COPY app/code/ /usr/src/app
WORKDIR /usr/src/app