<?php
// model/Productos.php

class ModeloProductos {
    // Recibe los datos y la conexión para guardarlos
    public static function guardarProducto($conexion, $nombre, $precio, $descripcion) {
        // Preparamos la consulta para evitar inyecciones SQL
        $sql = "INSERT INTO productos (nombre, precio, descripcion) VALUES (?, ?, ?)";
        $stmt = $conexion->prepare($sql);
        
        // La "sds" significa: String (nombre), Double (precio), String (descripcion)
        $stmt->bind_param("sds", $nombre, $precio, $descripcion);
        
        // Ejecutamos y regresamos true si tuvo éxito, false si falló
        return $stmt->execute();
    }
}
?>