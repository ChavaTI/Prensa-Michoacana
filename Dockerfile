FROM php:7.1-apache
LABEL mainteiner ="Yo merengues"
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
ADD ./src /var/www/html/.
WORKDIR /var/www/html/
#CMD [ "apache2ctl","-D","FOREGROUND" ]
