# Use PHP with Apache
FROM php:8.1-apache

# Install extensions
RUN docker-php-ext-install pdo pdo_mysql

# Copy project files
COPY . /var/www/html

# Fix permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/storage \
    && chmod -R 755 /var/www/html/bootstrap/cache

# Apache config
COPY .docker/vhost.conf /etc/apache2/sites-available/000-default.conf

# Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Install dependencies
WORKDIR /var/www/html
RUN composer install --no-dev --optimize-autoloader

# Link storage (ignore errors if link exists)
RUN php artisan storage:link || true
# Stage 1: Composer
FROM composer:latest AS composer

# Stage 2: PHP + Apache
FROM php:8.1-apache

# تثبيت الامتدادات
RUN docker-php-ext-install pdo pdo_mysql

# لو تحتاج zip:
# RUN apt-get update && apt-get install -y libzip-dev \
#     && docker-php-ext-install zip

# نسخ المشروع
COPY . /var/www/html

# صلاحيات
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/storage \
    && chmod -R 755 /var/www/html/bootstrap/cache

# Apache vhost
COPY docker/vhost.conf /etc/apache2/sites-available/000-default.conf

# نسخ Composer من Stage 1
COPY --from=composer /usr/bin/composer /usr/bin/composer

# العمل من مجلد المشروع
WORKDIR /var/www/html

# تثبيت الحزم
RUN composer install --no-dev --optimize-autoloader

# رابط التخزين
RUN php artisan storage:link || true

EXPOSE 80

# Expose port
EXPOSE 80
