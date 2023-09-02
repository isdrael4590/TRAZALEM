# syntax=docker/dockerfile:1
# Crea una etapa de construcción para instalar las dependencias
FROM php:8.2-alpine AS builder

# Instala los programas necesarios para instalar las dependencias de desarrollo
RUN apk --no-cache add \
    autoconf \
    g++ \
    make \
    pcre-dev \
    libzip-dev
# Instala las dependencias de PHP, necesarias como la MySQL
RUN docker-php-ext-install mysqli pdo pdo_mysql  zip

# Imagen final de producción
FROM php:8.2-alpine

# Copia las extensiones PHP de la etapa de builder
COPY --from=builder /usr/local/lib/php/extensions/ /usr/local/lib/php/extensions/

# Activar las extensiones instaladas
RUN docker-php-ext-enable mysqli pdo pdo_mysql  zip

# Instala las dependencias finales para correr las extensiones PHP
RUN apk --no-cache add \
    libzip

# Copia el código e inicializa el directorio de inicio
COPY code/ /usr/src/app
WORKDIR /usr/src/app
