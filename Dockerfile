FROM php:7.4-fpm

RUN apt-get update && apt-get install -y git wget libzip-dev zip unzip libc6 vim\
    && rm -rf /var/lib/apt/lists/* \
    && docker-php-ext-install zip pcntl

RUN pecl install xdebug \
    && docker-php-ext-enable xdebug

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php composer-setup.php
RUN php -r "unlink('composer-setup.php');"
RUN mv composer.phar /usr/local/bin/composer

RUN mkdir -p /var/www/html/

WORKDIR /var/www/html/

COPY . /var/www/html

RUN composer self-update --preview

RUN composer install --prefer-source --no-interaction

ENV PATH="~/.composer/vendor/bin:./vendor/bin:${PATH}"

EXPOSE 9000
