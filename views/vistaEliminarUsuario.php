<?php
function  mostrarFormularioEliminar($mensaje = '')
{

    if(!empty($mensaje)) {
        echo $mensaje;
    } else{
        

?>

    <form action="/controllers/controladorEliminarUsuario.php" method="POST">
        <label for="">A quien debo eliminar </label>
        <br>
        <input type="text" name="datusuario" id="datusuario" autocomplete="off">
        <br>
        <button type="submit">ELIMINAR Usuario</button>
    </form>
<?php
    }
}
?>