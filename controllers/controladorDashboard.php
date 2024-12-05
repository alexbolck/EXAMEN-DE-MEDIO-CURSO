<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

require_once $_SERVER['DOCUMENT_ROOT'] . '/etc/config.php';


if (!isset($_SESSION["txtusername"])) {
    header('Location: ' . get_views('vistaLogin.php'));
    exit;
}

$opcion = $_GET["opcion"] ??  'inico'; // por defecto a la pagina inicial
$contenido = '';

switch ($opcion) {
    case 'inicio':
        $contenido = "<H1> BIENVENIDOS AL SISTEMA</H1>";
        break;
    case 'ver':
        ob_start();
        include get_controllers_disk("controladorUsuario.php");
        $contenido = ob_get_clean();
        break;
    case 'ingresar':
        ob_start();
        include get_controllers_disk("controladorIngresarUsuario.php");
        $contenido = ob_get_clean();
        break;
    case 'modificar':
        ob_start();
        include get_controllers_disk("controladorActualizarUsuario.php");
        $contenido = ob_get_clean();
        break;
    case 'eliminar':
        ob_start();
        include get_controllers_disk("controladorEliminarUsuario.php");
        $contenido = ob_get_clean();
        break;
    default:
        http_response_code(400);
        $contenido = "<h1> bienvenido al sistema gracias por su preferencia  </h1>";
        break;
}

include get_views_disk('vistaDashboard.php');