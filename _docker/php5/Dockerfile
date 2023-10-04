FROM php:8.2-apache
RUN docker-php-ext-install mysqli
RUN mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"

EXPOSE 80
EXPOSE 443


# copy the Composer PHAR from the Composer image into the PHP image
COPY --from=composer:2.6.4 /usr/bin/composer /usr/bin/composer
# show that both Composer and PHP run as expected
RUN composer --version && php -v