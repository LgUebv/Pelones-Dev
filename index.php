<?php require_once "src/ConexionBaseDatos.php"; ?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tienda Docker - Panel de Control</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <style>
      /* Forzamos que el fondo sea negro total para que resalte el texto */
      body {
        background-color: #121212;
        color: white;
      }

      /* Estilo personalizado para los links del navbar */
      .nav-link {
        color: rgba(255, 255, 255, 0.8) !important; /* Blanco suave */
      }
      .nav-link:hover,
      .nav-link.active {
        color: #00f7ff !important; /* Cyan tipo neon al pasar el mouse */
      }
      .navbar-brand {
        color: #ffffff !important;
        font-weight: bold;
        text-transform: uppercase;
      }
    </style>
  </head>
  <body>
    <nav
      class="navbar navbar-expand-lg bg-dark border-bottom border-secondary"
      data-bs-theme="dark"
    >
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Abarrotes el primu</a>

        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="views/crearProducto.php">Productos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="controllers/ControllerClientes.php">Clientes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Proveedores</a>
            </li>
          </ul>
          <span class="navbar-text text-info small">
            Pelones Dev System v1.0
          </span>
        </div>
      </div>
    </nav>

    <div class="container mt-5 text-center">
      <h1 class="display-4">Bienvenido al Sistema</h1>
      <p class="lead">Panel de control de inventarios y gestión.</p>
    </div>

    <footer class="text-center mt-5 p-4 text-secondary">
      <hr class="border-secondary" />
      <small>Pelones Dev S.A de C.V.</small>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
