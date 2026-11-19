ARG PHP_VERSION=8.2
FROM php:${PHP_VERSION}-cli

RUN apt-get update \
    && apt-get install -y --no-install-recommends git unzip libcurl4-openssl-dev libonig-dev \
    && docker-php-ext-install curl mbstring \
    && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /app

# Install dependencies first so this layer is cached until composer.json changes
COPY composer.json ./
RUN composer install --no-interaction --no-progress --no-scripts --no-autoloader

COPY . .
RUN composer dump-autoload --optimize

CMD ["php", "-a"]
