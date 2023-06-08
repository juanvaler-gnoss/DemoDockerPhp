FROM php:7.0-apache  

COPY . /var/www/php

ENTRYPOINT ["php", "/var/www/php/program.php"]