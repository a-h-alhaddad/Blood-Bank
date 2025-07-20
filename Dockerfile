# ✅ Stage 1: نسخ Composer
FROM composer:latest AS composer

# ✅ Stage 2: PHP + Apache
FROM php:8.1-apache

# تثبيت امتدادات PHP
RUN apt-get update && apt-get install -y \
    libzip-dev \
    unzip \
    && docker-php-ext-install pdo pdo_mysql zip

# نسخ ملفات المشروع إلى الـ Container
COPY . /var/www/html

# إعداد Apache: نسخ ملف vhost.conf
COPY .docker/vhost.conf /etc/apache2/sites-available/000-default.conf

# نسخ Composer من Stage 1
COPY --from=composer /usr/bin/composer /usr/bin/composer

# تعيين مجلد العمل
WORKDIR /var/www/html

# تثبيت الاعتمادات
RUN composer install --no-dev --optimize-autoloader

# صلاحيات مجلدات Laravel
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 storage \
    && chmod -R 755 bootstrap/cache

# إنشاء symbolic link لـ storage
RUN php artisan storage:link || true

# فتح المنفذ
EXPOSE 80
