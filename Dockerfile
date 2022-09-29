FROM php:8.1-apache

RUN apt-get update \
    && apt-get install --assume-yes --quiet \
    apt-utils vim curl git \
    libzip-dev zip libicu-dev \
    libfreetype6-dev libjpeg62-turbo-dev libpng-dev \
    && rm -rf /var/lib/apt/lists/*

WORKDIR /public

RUN docker-php-ext-configure gd \
    #  --with-png \
    --with-jpeg --with-freetype \
    && docker-php-ext-install zip gd bcmath exif intl

COPY docker-sh/resources/*.conf /etc/apache2/sites-available
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN mkdir -p /home/$user/.composer && \
    chown -R $user:$user /home/$user

# Set working directory
WORKDIR /var/www
USER $user

EXPOSE 80