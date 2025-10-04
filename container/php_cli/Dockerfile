FROM php:8.4.13-cli

RUN apt update && apt install -y \
    curl \
    unzip \
    libssl-dev \
    libxml2-dev \
    libcurl4-openssl-dev \
    libicu-dev \
    libzip-dev \
    && docker-php-ext-install -j$(nproc) \
    pdo_mysql \
    opcache \
    intl \
    zip \
    bcmath \
    && pecl install redis xdebug \
    && docker-php-ext-enable redis xdebug

RUN echo "xdebug.mode=develop,profile,coverage,debug" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini && \
    echo "xdebug.client_host=host.docker.internal" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini && \
    echo "xdebug.log=/tmp/xdebug.log" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini && \
    echo "xdebug.log_level=0" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini && \
    echo "xdebug.start_with_request=yes" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini ;

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /srv/laravel_api

COPY . /srv/laravel_api

COPY ./container/php_cli/entrypoint.sh /usr/local/bin/entrypoint.sh

RUN chmod +x /usr/local/bin/entrypoint.sh

ENTRYPOINT ["/usr/local/bin/entrypoint.sh"]

CMD []
