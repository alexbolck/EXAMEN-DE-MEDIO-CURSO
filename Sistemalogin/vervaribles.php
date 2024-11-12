<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php

if (isset($_SESSION["favcolor"])) {

    echo "fevorite color is " . $_SESSION["favcolor"] . ".<br>";
    echo "favorite animal is " . $_SESSION["favanimal"] . ".";

} else
{
    echo "NO EXISTE VARIABLES";
    echo "<br>";
}
?>

<br>
PAGINA DE VER VARIABLES
<br>

<a href="http://127.0.0.1/Sistemalogin/vervariables.php">actualizar pagina</a>
<a href="http://127.0.0.1/Sistemalogin/borrarvariables.php">limpiar la variables</a>

</body>
</html>