<?php
class ConfigDB
{
    // OJO: SERVER debe ser el nombre del contenedor de MySQL que definan en el comando 'docker run'
    const SERVER = "contenedor_mysql"; 
    const USER   = "root";
    const PASS   = "root123"; // La contraseña que elijan para el contenedor
    const BD     = "mi_practica_db";
}
?>
