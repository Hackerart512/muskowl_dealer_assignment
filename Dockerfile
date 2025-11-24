FROM php:8.2-apache

RUN apt-get update && apt-get install -y \
    zip unzip git curl \
    libpng-dev libjpeg62-turbo-dev libfreetype6-dev && \
    docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install pdo pdo_mysql gd

# Enable rewrite
RUN a2enmod rewrite

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Set working dir
WORKDIR /var/www/html

# Copy project
COPY . .

# Install dependencies
RUN composer install --no-dev --optimize-autoloader

# Permissions
RUN chmod -R 775 storage bootstrap/cache
RUN chown -R www-data:www-data storage bootstrap/cache

# Make Apache serve public/
RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf

EXPOSE 8080

CMD ["apache2-foreground"]
