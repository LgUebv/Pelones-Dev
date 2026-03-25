<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header bg-success text-white">
                    <h4 class="mb-0">Registrar Nuevo Cliente</h4>
                </div>
                <div class="card-body">
                    
                    <form action="../controllers/ControllerClientes.php?action=guardar" method="POST">
                        
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre Completo</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required placeholder="Ej. Juan Pérez">
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="telefono" class="form-label">Teléfono</label>
                                <input type="text" class="form-control" id="telefono" name="telefono" required placeholder="Ej. 4741234567">
                            </div>
                            <div class="col-md-6">
                                <label for="correo" class="form-label">Correo Electrónico</label>
                                <input type="email" class="form-control" id="correo" name="correo" required placeholder="Ej. juan@correo.com">
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="direccion" class="form-label">Dirección</label>
                            <input type="text" class="form-control" id="direccion" name="direccion" required placeholder="Ej. Calle Principal #123, Colonia Centro">
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="../controllers/ControllerClientes.php?action=listar" class="btn btn-secondary">Cancelar</a>
                            
                            <button type="submit" class="btn btn-primary">Guardar Cliente</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>