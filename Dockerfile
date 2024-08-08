FROM php:7.3-apache

# Install necessary packages and extensions
RUN apt-get update && apt-get install -y --no-install-recommends \
    git \
    unzip \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libicu-dev \
    libxml2-dev \
    libzip-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-install -j$(nproc) mysqli pdo pdo_mysql intl zip soap \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Install mcrypt via PECL
RUN pecl install mcrypt-1.0.3 \
    && docker-php-ext-enable mcrypt

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Enable Apache modules
RUN a2enmod rewrite

WORKDIR /var/www/html
