<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Directorio de Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    
    <div class="mb-3">
        <a href="../index.php" class="btn btn-outline-secondary">
            &larr; Regresar al Menú
        </a>
    </div>

    <div class="card shadow">
        <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
            <h4 class="mb-0">Directorio de Clientes</h4>
            
            <a href="../controllers/ControllerClientes.php?action=crear" class="btn btn-success btn-sm">
                + Nuevo Registro
            </a>
        </div>
        
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Teléfono</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Dirección</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($listaClientes)): ?>
                            <?php foreach ($listaClientes as $cliente): ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($cliente['id']); ?></td>
                                    <td><?php echo htmlspecialchars($cliente['nombre']); ?></td>
                                    <td><?php echo htmlspecialchars($cliente['telefono']); ?></td>
                                    <td><?php echo htmlspecialchars($cliente['correo']); ?></td>
                                    <td><?php echo htmlspecialchars($cliente['direccion']); ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="5" class="text-center text-muted">No hay clientes registrados en la base de datos.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</body>
</html>