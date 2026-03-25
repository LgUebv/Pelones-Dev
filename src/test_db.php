<?php
// 1. Incluimos la clase de conexión que definimos antes
require_once "ConexionBaseDatos.php";

// 2. Intentamos crear la instancia
try {
    $db = new ConexioBaseDatos();
    $con = $db->getConexion();
    $status = "success";
    $mensaje = "¡Conexión Exitosa, carnal!";
    $info = "PHP 8.4 y MySQL están hablando por la red 'red_practica'.";
} catch (Exception $e) {
    $status = "error";
    $mensaje = "¡Valió barriga! No se pudo conectar.";
    $info = $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Status de Conexión - Docker</title>
    <style>
        body {
            background-color: #0a0a0a;
            color: #fff;
            font-family: 'Courier New', Courier, monospace;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .card {
            border: 2px solid <?php echo ($status == 'success') ? '#0ff' : '#f0f'; ?>;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 0 20px <?php echo ($status == 'success') ? '#0ff' : '#f0f'; ?>;
            text-align: center;
            background: rgba(0, 0, 0, 0.8);
        }
        h1 {
            text-transform: uppercase;
            letter-spacing: 5px;
            text-shadow: 0 0 10px <?php echo ($status == 'success') ? '#0ff' : '#f0f'; ?>;
        }
        p { font-size: 1.2rem; }
        .info { color: #888; font-size: 0.9rem; margin-top: 10px; }
    </style>
</head>
<body>

    <div class="card">
        <h1><?php echo $mensaje; ?></h1>
        <p>Status: <strong><?php echo strtoupper($status); ?></strong></p>
        <div class="info">
            <?php echo $info; ?>
        </div>
        <br>
        <button onclick="location.reload()" style="background: none; border: 1px solid #fff; color: #fff; cursor: pointer; padding: 5px 10px;">Re-check</button>
    </div>

</body>
</html>

<?php
// 3. Cerramos la conexión al terminar
if (isset($db)) {
    $db->closeConexion();
}
?>
