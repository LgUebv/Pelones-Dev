<?php
require_once('../model/Clientes.php');

class ControllerClientes {
    
    public function mostrarClientes() {
        $modelo = new ClienteModel();
        
        $listaClientes = $modelo->obtenerTodos();
        
        require_once('../views/mostrarClientes.php');
    }


    public function crear() {
        require_once('../views/crearCliente.php');
    }


    public function guardar() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $nombre = $_POST['nombre'] ?? '';
            $telefono = $_POST['telefono'] ?? '';
            $correo = $_POST['correo'] ?? '';
            $direccion = $_POST['direccion'] ?? '';

            $modelo = new ClienteModel();
            $exito = $modelo->insertarCliente($nombre, $telefono, $correo, $direccion);

            if ($exito) {
                header('Location: ControllerClientes.php?action=listar');
                exit;
            } else {
                echo "Error al guardar el cliente.";
            }
        }
    }
}
$controlador = new ControllerClientes();
$action = $_GET['action'] ?? 'listar';

switch ($action) {
    case 'crear':
        $controlador->crear();
        break;
    case 'guardar':
        $controlador->guardar();
        break;
    case 'listar':
    default:
        $controlador->mostrarClientes(); 
        break;
}
?>