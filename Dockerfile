FROM php:8.3-apache

# Install MySQL client, server, and other dependencies
RUN apt-get update && apt-get install -y \
      git \
      zip \
      curl \
      sudo \
      libpq-dev

# Install mysqli PHP extension for MySQL support
RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable mysqli pdo_mysql

# Set permissions
RUN chown -R www-data:www-data /var/www/html

# Set working directory
WORKDIR /var/www/html

# Copy the current directory contents into the container at /var/www/html
COPY ./ /var/www/html/

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Install PHP dotenv
ENV COMPOSER_ALLOW_SUPERUSER=1
RUN composer require vlucas/phpdotenv

# Expose port 80
EXPOSE 80