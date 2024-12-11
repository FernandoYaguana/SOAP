# Dockerfile
FROM php:7.4-apache

# Instalar dependencias necesarias
RUN apt-get update && apt-get install -y \
    libxml2-dev \
    && docker-php-ext-install soap

COPY ./soap /var/www/html/soap
COPY ./index.php /var/www/html/

EXPOSE 80
CMD ["apache2-foreground"]