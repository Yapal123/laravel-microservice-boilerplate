FROM php:8.3-cli-alpine

WORKDIR /var/www/laravel

COPY --from=mlocati/php-extension-installer /usr/bin/install-php-extensions /usr/bin/

RUN install-php-extensions opcache zip sockets \
    protobuf \
    xdebug \
    && apk update && apk add --no-cache make protobuf-dev

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

CMD ["/var/www/laravel/rr", "serve", "-d", "-c", "/var/www/laravel/.rr.yaml"]
