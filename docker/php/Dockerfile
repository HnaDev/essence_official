FROM php:8-fpm

# Install dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    mariadb-client \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    libonig-dev \
    locales \
    libzip-dev \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    curl \
    libsodium-dev \
    pkg-config \
    supervisor

#RUN pecl install redis-5.1.1

RUN apt-get install -y iputils-ping

# Install extensions & required packages
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath zip
RUN docker-php-ext-configure gd --with-freetype --with-jpeg
RUN docker-php-ext-install gd
RUN docker-php-ext-install sodium
#RUN docker-php-ext-install zip
#RUN docker-php-ext-install redis
#RUN docker-php-ext-enable redis

# Install composer
RUN curl -sS https://getcomposer.org/installer | \
    php -- --install-dir=/usr/local/bin --filename=composer

# Set new UID for user www-data
RUN usermod -u 1000 www-data

WORKDIR /var/www/
COPY ./src/storage/app ./html/storage/app
COPY ./src/storage/framework ./html/storage/framework
COPY ./src/storage/logs ./html/storage/logs

COPY ./src/bootstrap ./html/bootstrap

RUN chmod -R 777 ./html/storage
RUN chmod -R 777 ./html/bootstrap/cache


RUN chown -R www-data:www-data /var/www


WORKDIR /var/www/html

EXPOSE 9000