<?php

session_start();
    
if(!isset( $_SESSION["txtusername"])) {
header('Location: ' .get_urlBase('index.php'));
}

require_once $_SERVER['DOCUMENT_ROOT']. '/etc/config.php';
require_once $_SERVER['DOCUMENT_ROOT']. '/models/connect/conexion.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $tmpdatusuario = $_POST["datusuario"];
    $tmpdatpassword =  $_POST["datpassword"];
    $tmpdatperfil =  $_POST["datperfil"];

    $conexion = new conexion($host,$namedb,$userdb,$paswordb);
    $pdo = $conexion->obtenerConexion();
    try {
        $sentencia = $pdo->prepare("INSERT INTO usuarios (username, password, perfil) VALUES (?, ?, ?);");
        $sentencia->execute([$tmpdatusuario,$tmpdatpassword,$tmpdatperfil]);
        echo "USUARIO REGISTRADO CON EXITO <br>";
        }catch(PDOException $e){
            echo "Hubo un error .... <br>";
            echo $e->getMessage();
        }
    exit();
}
//$query = $pdo->query("select id,username,password,perfil from usuarios");
?>

<form action="" method="POST">
    <label for="datusuario"> usuario</label>
        <input type="text" name="datusuario" id="datusuario">
    <br>
    <label for="datpassword"> password </label>
        <input type="password" name="datpassword" id="datpassword">
    <br>
    <label for="datperfil"> perfil </label>
        <input type="perfil" name="datperfil" id="datperfil">
    <br>

    <button type="submit">REGISTRAR USUARIO</button>
    
    
    
</form>