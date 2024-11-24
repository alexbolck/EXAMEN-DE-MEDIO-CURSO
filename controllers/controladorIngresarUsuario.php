<?php

session_start();

require_once $_SERVER['DOCUMENT_ROOT']. '/models/modeloUsuario.php';
require_once $_SERVER['DOCUMENT_ROOT']. '/views/vistaIngresarUsuario.php';
    
if(!isset( $_SESSION["txtusername"])) {
header('Location: ' .get_urlBase('index.php'));
}

$mensaje = '';
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $tmpdatusuario = $_POST["datusuario"];
    $tmpdatpassword =  $_POST["datpassword"];
    $tmpdatperfil =  $_POST["datperfil"];
    
    $modeloUsuario = new modeloUsuario();

    try {
        $modeloUsuario->insertarUsuarios($tmpdatusuario, $tmpdatpassword, $tmpdatperfil,);
        $mensaje= "usuario registrado con exito";
        } catch (PDOException $e) {
            $mensaje= "Hubo un error ....<br>".$e->getMessage();
        }
    exit();
}