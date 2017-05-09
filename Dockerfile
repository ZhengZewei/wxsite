FROM php:7.1.4-fpm

RUN pecl install redis-3.1.0 \
  && pecl install xdebug-2.5.0 \
  && docker-php-ext-enable redis xdebug

# COPY config/php.ini /usr/local/etc/php/
COPY . /var/www/html/

EXPOSE 9000

ENTRYPOINT ["/usr/sbin/php-fpm", "-F"]