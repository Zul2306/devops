FROM php:8.1-fpm

# Install ekstensi PHP dan dependensi
RUN apt-get update && apt-get install -y \
    libpq-dev git unzip curl \
    && docker-php-ext-install pdo pdo_pgsql

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copy seluruh project
COPY . .

# Install dependensi PHP
RUN composer install --no-interaction --prefer-dist --optimize-autoloader

# Set permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache
