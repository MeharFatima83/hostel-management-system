FROM php:8.2-apache

# Install required packages and PHP extensions
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    default-mysql-client \
    && docker-php-ext-install \
    pdo_mysql \
    mbstring \
    exif \
    pcntl \
    bcmath \
    gd \
    zip \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*


# Enable Apache Rewrite Module
RUN a2enmod rewrite


# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer


# Set working directory
WORKDIR /var/www/html


# Copy Laravel project
COPY . .


# Install PHP dependencies
RUN composer install \
    --no-dev \
    --optimize-autoloader \
    --no-interaction


# Set correct permissions
RUN chown -R www-data:www-data \
    /var/www/html/storage \
    /var/www/html/bootstrap/cache


# Laravel public folder as Apache DocumentRoot
RUN sed -i \
    's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/public|' \
    /etc/apache2/sites-available/000-default.conf


# Allow .htaccess overrides
RUN sed -i \
    '/<Directory \/var\/www\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' \
    /etc/apache2/apache2.conf


# Configure Apache to use Render port
RUN sed -i \
    's/Listen 80/Listen 10000/' \
    /etc/apache2/ports.conf


RUN sed -i \
    's/:80>/:10000>/' \
    /etc/apache2/sites-available/000-default.conf


# Expose application port
EXPOSE 10000


# Start Apache
CMD ["apache2-foreground"]