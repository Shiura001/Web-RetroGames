<?php
include_once 'Controladores/control.php';

$action = isset($_GET['action']) ? $_GET['action'] : '';

$controlador = new Controlador();

switch ($action) {
    case 'login':
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $controlador->login($username, $password, $email);
        } else {
            include 'Vistas/login.php';
        }
        break;
    case 'logout':
        $controlador->logout();
        break;
    case 'register':
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $controlador->register($username, $password, $email);
            include 'Vistas/login.php';

        } else {
            include 'Vistas/register.php';
        }
        break;
    case 'panel':
        include 'Vistas/main.php';

        break;
    case 'juegos':
        include 'Vistas/juegos.php';
        break;
    case 'emuladores':
        include 'Vistas/Emuladores.php';
        break;
    case 'consolas':
        include 'Vistas/Consolas.php';
        break;
        case 'historia':
            include 'Vistas/Historia.php';
            break;
        case 'nosotros':
            include 'Vistas/Nosotros.php';
            break;                             
    default:
        include 'Vistas/main.php';
        break;
    case 'main':
        include 'Vistas/main.php';
        break;
       
        
}
?>
