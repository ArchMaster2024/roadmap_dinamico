#!/bin/bash

cd /srv/laravel_api

composer install

if grep -qE '^APP_KEY=(|SomeRandomKey)$' .env; then
    echo "APP_KEY no está definida. Generando una nueva..."
    php artisan key:generate
else
    echo "APP_KEY ya está definida."
fi

php artisan migrate --seed

chmod -R 777 storage
chmod -R 777 bootstrap/cache

exec bash
