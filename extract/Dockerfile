FROM php:8.1-apache

RUN apt-get update &&\
    apt-get install dnsutils -y
COPY . /var/www/html/

EXPOSE 80

CMD ["apache2-foreground"]
