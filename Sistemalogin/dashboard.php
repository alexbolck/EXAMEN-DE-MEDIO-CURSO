<?php
session_destroy();

    if(isset( $_SESSION["txtusername"])) {
    header('location : http://127.0.0.1/sistemalogin/index.php');

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilodashboard.css">
</head>
<body>
    <div class="menu">
        <h3>este es el menu</h3>
        <ul>
            <li><a href="?opcion=inicio">inicio</a> </li>
            <li><a href="?opcion=ver"> ver </a> </li>
            <li><a href="?opcion=ingresar"> ingresar </a> </li>
            <li><a href="?opcion=modificar"> modificar </a> </li>
            <li><a href="?opcion=eliminar"> eliminar </a> </li>
            <li><a href="http://127.0.0.1/sistemalogin/logout.php"> salir </a> </li>
        </ul>

    </div>
    <div class="contenido">
        <?php
            if (isset($_GET["opcion"])) {
                $opcion = $_GET["opcion"];

                echo $opcion;

            }
        ?>


    </div>
</body>
</html>