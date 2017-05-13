FROM php:7.0-apache

RUN pecl channel-update pecl.php.net

RUN pecl install redis-3.1.0 \
  && pecl install xdebug-2.5.0 \
  && docker-php-ext-enable redis xdebug

RUN docker-php-ext-install pdo_mysql \
  && docker-php-ext-install mysqli \
  && docker-php-ext-enable pdo_mysql \
  && docker-php-ext-enable mysqli

RUN mkdir -p /app && rm -rf /var/www/html && ln -s /app /var/www/html

COPY . /app
WORKDIR /app

# RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf \
#   && sed -i 's/variables_order.*/variables_order = "EGPCS"/g' \
#   /etc/php5/apache2/php.ini