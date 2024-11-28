<?php

session_start();

if (!isset($_SESSION["txtusername"])) {
    header('Location: ' . get_UrlBase('index.php'));
}

require_once $_SERVER['DOCUMENT_ROOT'] . '/etc/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/models/connect/conexion.php';

// $conexion = new conexion($host, $namedb, $userdb, $paswordb);
// $pdo = $conexion->obtenerConexion();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $tmpdatusuario = $_POST["datusuario"];

    $conexion = new conexion(DB_HOST, DB_NAME, DB_USER, DB_PASS);
    $pdo = $conexion->obtenerConexion();

    if (isset($_POST["custId"])) {
        try {
            $sentencia = $pdo->prepare("update usuarios set username=?, password=?, perfil=? where id=?;");
            $sentencia->execute([$_POST["datusuario"],$_POST["datpassword"],$_POST["datperfil"], $_POST["custId"]]);
            echo $tmpdatusuario. " Modificado con exito <br>";
        } catch (PDOException $e) {
            echo "Hubo un error no se pudo modificar .... <br>";
            echo $e->getMessage();
        }
    } else {


        $query = $pdo->query("select id,username,password,perfil from usuarios where username='" .$tmpdatusuario."'");
        $fila = $query->fetch(PDO::FETCH_ASSOC);

?>
        <form action="" method="POST">

            <input type="hidden" name="custId" id="custId"  value=" <?php echo $fila['id'] ?>">
            <br>
            <label for="datusuario"> usuario</label>
            <input type="text" name="datusuario" id="datusuario" value="<?php echo $fila['username'] ?>">
            <br>
            <label for="datpassword"> password </label>
            <input type="password" name="datpassword" id="datpassword" value="<?php echo $fila['password'] ?>">
            <br>
            <label for="datperfil"> perfil </label>
            <input type="perfil" name="datperfil" id="datperfil" value="<?php echo $fila['perfil'] ?>">
            <br>

            <button type="submit">MODIFICAR USUARIO</button>



        </form>
<?php
    }
    exit();
}

?>

<form action="" method="POST">
    <label for="">QUE USUARIO DESEAS MODIFICAR</label>
    <input type="text" name="datusuario" id="datusuario" >
    <br>
    <button type="submit">bucar Usuario</button>
</form>