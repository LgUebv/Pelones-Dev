<?php
// views/formulario_productos.php
// Mandamos llamar al controlador al inicio de la página
require_once __DIR__ . '/../controllers/ControllerProductos.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Productos</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .formulario-container { max-width: 400px; padding: 20px; border: 1px solid #ccc; border-radius: 5px; }
        .campo { margin-bottom: 15px; }
        .campo label { display: block; font-weight: bold; }
        .campo input, .campo textarea { width: 100%; padding: 8px; box-sizing: border-box; }
        button { padding: 10px 15px; background-color: #007BFF; color: white; border: none; cursor: pointer; }
        button:hover { background-color: #0056b3; }
    </style>
</head>
<body>

    <div class="formulario-container">
        <h2>Nuevo Producto</h2>
        
        <?php echo $mensaje; ?>

        <form method="POST" action="">
            <div class="campo">
                <label for="nombre">Nombre del Producto:</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>
            <div class="campo">
                <label for="precio">Precio:</label>
                <input type="number" id="precio" name="precio" step="0.01" required>
            </div>
            <div class="campo">
                <label for="descripcion">Descripción:</label>
                <textarea id="descripcion" name="descripcion" rows="3" required></textarea>
            </div>
            <button type="submit">Guardar Producto</button>
        </form>
    </div>

</body>
</html>