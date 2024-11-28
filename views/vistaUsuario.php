<?php

function mostrarUsuarios($usuarios)
{

?>
  <h2> LISTA DE USUARIOS DEL SISTEMA</h2>
  <br>
  <table border="1">

    <tr>
      <th> id </th>
      <th> username </th>
      <th> password</th>
      <th> perfil </th>
      <th> eliminar </th>
      <th> editar </th>
    </tr>
    <?php
    foreach ($usuarios as $usuario) {

    ?>
      <tr>
        <td> <?php echo $usuario['id'] ?> </td>
        <td> <?php echo $usuario['username'] ?> </td>
        <td> <?php echo $usuario['password'] ?> </td>
        <td> <?php echo $usuario['perfil'] ?> </td>
        <td> <a href="controladorEliminarUsuario.php"> eliminar</a></td>
        <td> <a href="controladorActualizar.php<?php $usuario['id']?>"> editar</a> </td>
      </tr>
    <?php
    }

    ?>
  </table>

<?php
}

?>