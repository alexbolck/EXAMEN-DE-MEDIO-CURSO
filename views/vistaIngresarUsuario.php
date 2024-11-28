<?php
    function mostrarFormularioIngreso($mensaje){

        if(empty($mensaje)){
        
    
?>
<form action="/controllers/controladorIngresarUsuario.php" method="POST">
    <label for="datusuario"> usuario</label>
        <input type="text" name="datusuario" id="datusuario" autocomplete="off">
    <br>
    <br>
    <label for="datpassword"> password </label>
        <input type="password" name="datpassword" id="datpassword" autocomplete="off">
    <br>
    <br>
    <label for="datperfil"> perfil </label>
        <input type="text" name="datperfil" id="datperfil" autocomplete="off">
    <br>
    <br>
    <button type="submit">REGISTRAR USUARIO</button>
    
    
    
</form>

<?php
    }else{
        echo $mensaje;

    }
}
?>