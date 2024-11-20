<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
    
<?php
session_unset();

session_destroy();
?>

se borraron todas las variables
<br>

<a href="http://127.0.0.1/Sistemalogin/vervariables.php">ver variables</a>
<a href="http://127.0.0.1/Sistemalogin/test.php">volver a grabar las variables</a>
</body>
</html>