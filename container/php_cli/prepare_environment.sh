!#/bin/bash

php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r composer-setup.php --install-dir=/usr/local/bin --filename=composer
php -r "unlink('composer-setup.php');"

export PATH=$PATH:$HOME/.composer/vendor/bin

cd /srv/laravel_api

if [ ! -d "vendor" ]; then
    composer install
fi

php artisan migrate --seed

chmod -R 777 storage
chmod -R 777 bootstrap/cache
