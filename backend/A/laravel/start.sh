#!/bin/bash
set -e

composer install
php artisan migrate --force
php artisan serve --host 0.0.0.0
