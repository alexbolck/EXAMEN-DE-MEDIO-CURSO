<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/etc/config.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="<?php echo get_UrlBase('css/estilodashboard.css') ?>">
</head>
<body>
    
    <div class="menu">
        <h3>el menu del sistema</h3>
        <ul>
            <li><a href="?opcion=inicio">inicio</a> </li>
            <li><a href="?opcion=ver"> ver </a> </li>
            <li><a href="?opcion=ingresar"> ingresar </a> </li>
            <li><a href="?opcion=modificar"> modificar </a> </li>
            <li><a href="?opcion=eliminar"> eliminar </a> </li>
            <li><a href="<?php echo get_controllers('logout.php') ?>"> salir </a> </li>
        </ul>
    </div>
    
    <div class="contenido">
        <?php
            if(isset($contenido)) {
                echo $contenido;
            } else {
                echo "<h1> Bienvenido al Sistema </h1>";
            }
          //echo "aqui deberia estar el contenido";
        ?>


    </div>

</body>

</html>