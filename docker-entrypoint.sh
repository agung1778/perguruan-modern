#!/bin/sh
set -e

mkdir -p /tmp/bootstrap/cache \
         /tmp/storage/framework/views \
         /tmp/storage/framework/sessions \
         /tmp/storage/framework/cache \
         /tmp/storage/logs

php artisan optimize
php artisan migrate --force
php artisan view:cache

exec frankenphp run --config /etc/caddy/Caddyfile