FROM php:7.0-apache

RUN pecl channel-update pecl.php.net

RUN pecl install redis-3.1.0 \
  && pecl install xdebug-2.5.0 \
  && docker-php-ext-enable redis xdebug

RUN docker-php-ext-install pdo_mysql \
  && docker-php-ext-install mysqli

RUN mkdir -p /app && rm -rf /var/www/html && ln -s /app /var/www/html

COPY . /app
WORKDIR /app

RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf \
  && sed -i 's/variables_order.*/variables_order = "EGPCS"/g' \
  /etc/php5/apache2/php.ini

# echo '<?php ' > index2.php
# echo 'define("HOST", "rm-uf68lsw07o293t779o.mysql.rds.aliyuncs.com");' >> index2.php
# echo 'define("USER", 'wxsite_dev');' >> index2.php
# echo 'define("PWD", 'jd73d4ifh');' >> index2.php
# echo 'define("DB", 'wxsite_dev');' >> index2.php

# echo '$mysqli=new mysqli(HOST,USER,PWD,DB);' >> index2.php

# echo 'if ($mysqli->connect_errno) {' >> index2.php
# echo '    "Connect Error:".$mysqli->connect_error;' >> index2.php
# echo '}' >> index2.php
# echo '$mysqli->set_charset('utf8');' >> index2.php
# echo '$sql="select * from tes";' >> index2.php
# echo '$result=$mysqli->query($sql);' >> index2.php

# echo '$rows=$result->fetch_all(MYSQLI_ASSOC);' >> index2.php

# echo 'var_dump($rows);' >> index2.php


# //将结果指针调整到任意行
# $result->data_seek(2);
# $row=$result->fetch_row();
# //$row=$result->fetch_array();
# //$row=$result->fetch_assoc();
# //$row=$result->fetch_object();

# //释放结果集
# $result->free();
# //$result->free_result();
# //$result->close();

# //关闭连接
# $mysqli->close();