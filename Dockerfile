# Stage 1: Composer
FROM composer:latest AS composer

# Stage 2: PHP + Apache
FROM php:8.1-apache

# تثبيت الامتدادات المطلوبة
RUN apt-get update && apt-get install -y \
    libzip-dev unzip \
    && docker-php-ext-install pdo pdo_mysql zip

# نسخ ملفات المشروع
COPY . /var/www/html

# إعداد Apache Virtual Host
COPY .docker/vhost.conf /etc/apache2/sites-available/000-default.conf

# نسخ Composer من الـ Stage 1
COPY --from=composer /usr/bin/composer /usr/bin/composer

# تعيين مجلد العمل
WORKDIR /var/www/html

# تثبيت الحزم عبر Composer
RUN composer install --no-dev --optimize-autoloader

# صلاحيات Laravel
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 storage \
    && chmod -R 755 bootstrap/cache

# نسخ ملف Entry Point Script
COPY .docker/entrypoint.sh /usr/local/bin/entrypoint.sh
RUN chmod +x /usr/local/bin/entrypoint.sh

# تعريف Entrypoint
ENTRYPOINT ["/usr/local/bin/entrypoint.sh"]

# فتح المنفذ
EXPOSE 80
