<?php
require_once('../src/ConexionBaseDatos.php');

class ClienteModel {
    private $conexion;

    public function __construct() {

        $db = new ConexioBaseDatos();
        $this->conexion = $db->getConexion();
    }
    public function obtenerTodos() {
        $sql = "SELECT id, nombre, telefono, correo, direccion FROM clientes";
        $resultado = $this->conexion->query($sql);
    

        if (!$resultado) {
            die("Error de SQL: " . $this->conexion->error);
        }
    
        $clientes = [];
        if ($resultado->num_rows > 0) {
                while ($fila = $resultado->fetch_assoc()) {
                $clientes[] = $fila;
            }
        }
        return $clientes;
    }
    public function insertarCliente($nombre, $telefono, $correo, $direccion) {
        // Usamos el signo de interrogación (?) por seguridad
        $sql = "INSERT INTO clientes (nombre, telefono, correo, direccion) VALUES (?, ?, ?, ?)";
        
        // Preparamos la consulta
        $stmt = $this->conexion->prepare($sql);
        
        if ($stmt) {
            // La "s" significa que los 4 parámetros son Strings (texto)
            $stmt->bind_param("ssss", $nombre, $telefono, $correo, $direccion);
            
            // Ejecutamos y guardamos si fue exitoso (true) o falló (false)
            $resultado = $stmt->execute();
            
            $stmt->close();
            return $resultado;
        } else {
            return false;
        }
    }

}
?>