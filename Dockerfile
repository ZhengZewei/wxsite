FROM php:7.1.0-fpm

RUN pecl channel-update pecl.php.net

RUN pecl install redis-3.1.0 \
  && pecl install xdebug-2.5.0 \
  && docker-php-ext-enable redis xdebug

# COPY config/php.ini /usr/local/etc/php/

ADD __config/www.conf /usr/local/etc/php-fpm.d/www.conf
ADD __config/php-fpm.conf /usr/local/etc/php-fpm.conf

COPY . /var/www/html/

VOLUME /var/www/html/

EXPOSE 9000

ENTRYPOINT /usr/local/sbin/php-fpm --nodaemonize