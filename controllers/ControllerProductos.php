<?php
// Incluimos los archivos necesarios
require_once __DIR__ . '/../src/ConexionBaseDatos.php';
require_once __DIR__ . '/../model/Productos.php';

$mensaje = "";
$tipo_alerta = "";

// Verificamos si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibimos los datos de la vista
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion'];

    try {
        // 1. Instanciamos la clase
        $db = new ConexioBaseDatos();
        
        // 2. Extraemos la conexión a MySQL y la guardamos en la variable $conexion
        $conexion = $db->getConexion();

        // 3. Ahora SÍ le pasamos la conexión real a tu Modelo
        $exito = ModeloProductos::guardarProducto($conexion, $nombre, $precio, $descripcion);

        if ($exito) {
            $tipo_alerta = "success";
            $mensaje = "¡Producto registrado exitosamente al inventario!";
        } else {
            $tipo_alerta = "danger";
            $mensaje = "Error al registrar el producto.";
        }

        // 4. Cerramos la puerta al terminar
        $db->closeConexion();

    } catch (Exception $e) {
        $tipo_alerta = "danger";
        $mensaje = "Hubo un problema de conexión: " . $e->getMessage();
    }
}
?>