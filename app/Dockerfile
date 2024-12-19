FROM php:8.2-apache

# Instalar extensiones y herramientas necesarias
RUN apt-get update && apt-get install -y \
    libpq-dev \
    curl \
    git \
    unzip \
    nodejs \
    npm \
    && docker-php-ext-install pdo pdo_pgsql

# Establecer directorio de trabajo
WORKDIR /var/www/html

# Instalar las dependencias de Node.js globalmente
RUN npm install -g tailwindcss postcss autoprefixer
