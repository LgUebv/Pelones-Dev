# 1. Base PHP 8.4 con Apache
FROM php:8.4-apache

# 2. Instalamos mysqli (Extensión necesaria para el código de tu colega)
# Usamos el script oficial 'docker-php-ext-install'
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# 3. Copiamos los archivos a la carpeta del servidor
COPY ./src /var/www/html/

# 4. Permisos para que Apache no se ponga fresa
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
