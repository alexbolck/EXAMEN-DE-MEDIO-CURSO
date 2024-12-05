<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

require_once $_SERVER['DOCUMENT_ROOT'] . '/etc/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/models/modeloUsuario.php';

if (isset($_SESSION["txtusername"])) {
    header('Location: ' . get_controllers('controladorDashboard.php'));
    exit();
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $v_username = "";
    $v_password = "";

    if ($_POST["txtusername"]) {
        $v_username = $_POST["txtusername"];
    }

    if ($_POST["txtpassword"]) {
        $v_password = $_POST["txtpassword"];
    }

    $modeloUsuario = new modeloUsuario();
    $credenciales = $modeloUsuario->validarUsuario($v_username,$v_password);

    if ($credenciales) {
        $_SESSION["txtusername"] = $v_username;
        $_SESSION["txtpassword"] = $v_password;

        header('Location: ' . get_controllers('controladorDashboard.php'));
        // Detener el script después de redireccionar
    } else {
        header('Location: ' . get_views('claveequivocada.php'));
    }
}

include get_views_disk('vistalogin.php');

