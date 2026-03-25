<?php
// Incluimos los datos de configuracion
include_once __DIR__ . "/config.php";

class ConexioBaseDatos
{
    // Instancia para mysqli
    private $ConexionMySQL;

    // Constructor para inicializar la conexion
    public function __construct()
    {
        // Creamos el objeto de conexión usando las constantes de ConfigDB
        $this->ConexionMySQL = new mysqli(
            ConfigDB::SERVER,
            ConfigDB::USER,
            ConfigDB::PASS,
            ConfigDB::BD
        );

        // Validación de la conexión (si truena, nos dice por qué)
        if ($this->ConexionMySQL->connect_error) {
            die("Carnal, falló la conexión: " . $this->ConexionMySQL->connect_error);
        }
    }

    // Función para obtener la conexión activa (para hacer queries)
    public function getConexion()
    {
        return $this->ConexionMySQL;
    }

    // Función para cerrar la conexión y liberar memoria
    public function closeConexion()
    {
        $this->ConexionMySQL->close();
    }
}
?>
