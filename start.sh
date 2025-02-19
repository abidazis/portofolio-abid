#!/usr/bin/env bash
# Jalankan migrasi database sebelum menjalankan server
php artisan migrate --force

# Jalankan Laravel dengan host dan port yang sesuai di Render
php artisan serve --host=0.0.0.0 --port=$PORT
