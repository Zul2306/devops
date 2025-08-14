# Gunakan PHP 8.1 FPM
FROM php:8.1-fpm

# Install dependensi PHP + PostgreSQL driver + tools tambahan
RUN apt-get update && apt-get install -y \
    libpq-dev git unzip zip \
    && docker-php-ext-install pdo pdo_pgsql

# Set working directory
WORKDIR /var/www/html

# Copy seluruh project ke container
COPY . /var/www/html

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Install dependensi Laravel
RUN composer install --no-interaction --prefer-dist --optimize-autoloader

# Set permission folder storage & bootstrap/cache
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache
