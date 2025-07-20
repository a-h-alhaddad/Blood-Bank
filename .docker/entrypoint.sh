#!/bin/bash

echo "Running Laravel Migrations..."
php artisan migrate --force || true

echo "Creating Storage Symlink..."
php artisan storage:link || true

# تشغيل Apache
echo "Starting Apache..."
exec apache2-foreground
