<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
    
<?php
session_unset();

session_destroy();

header('location : http://127.0.0.1/sistemalogin/index.php');

?>


</body>

</html>