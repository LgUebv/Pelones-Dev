#!/bin/bash

echo "Iniciando ejecución de las instrucciones"

# Primero hay que crear la red
echo "Creando RED......."
docker network create red_Practica21 || true

# Creamos el volumen
echo "Creando volumen....."
docker volume create practica21_data

# Crear el contenedor de mysql
echo "Creando el contenedor de la base de datos...."

docker run -d \
    --name server_mysql_p21 \
    --network red_Practica21 \
    -p 3305:3306 \
    -v practica21_db_data:/var/lib/mysql \
    -e MYSQL_ROOT_PASSWORD=root \
    -e MYSQL_DATABASE=practica21 \
    mysql:latest

echo "Lanzando contenedor de PHP"

docker run -d \
    --name contenedor_php_p21 \
    --network red_Practica21 \
    -p 8080:80 \
    server-php
