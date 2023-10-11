FROM php:8.2-apache
# RUN docker-php-ext-install mysqli
RUN mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"
# COPY ./../../e-certificate /var/www/html/

EXPOSE 80
EXPOSE 443


COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

RUN composer --version && php -v && docker-php-ext-install pdo pdo_mysql