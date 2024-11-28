<?php

function mostrarFormularioBusqueda($mensaje = '')
{
    if (!empty($mensaje)){
        echo $mensaje;
        echo "<br>";
    }
?>
    <form action="/controllers/controladorActualizarUsuario.php" method="POST">
        <label for="">QUE USUARIO DESEAS MODIFICAR</label>
        <br>
        <input type="text" name="datusuario" id="datusuario" autocomplete="off">
        <br>
        <button type="submit">bucar Usuario</button>
    </form>

<?php
}

function mostrarFormularioEdicion($usuario,$mensaje = '')
{
?>
    <form action="/controllers/controladorActualizarUsuario.php" method="POST">

        <input type="hidden" name="custId" id="custId" value=" <?php echo $usuario['id'] ?>">
        <br>
        <label for="datusuario"> usuario</label>
        <input type="text" name="datusuario" id="datusuario" autocomplete="off" value="<?php echo $usuario['username'] ?>">
        <br>
        <label for="datpassword"> password </label>
        <input type="password" name="datpassword" id="datpassword" autocomplete="off" value="<?php echo$usuario['password'] ?>">
        <br>
        <label for="datperfil"> perfil </label>
        <input type="text" name="datperfil" id="datperfil" autocomplete="off" value="<?php echo $usuario['perfil'] ?>">
        <br>

        <button type="submit">MODIFICAR USUARIO</button>



    </form>
<?php
}

?>