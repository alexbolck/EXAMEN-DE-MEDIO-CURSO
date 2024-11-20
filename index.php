<?php
        require_once $_SERVER['DOCUMENT_ROOT'].'/etc/config.php';
        require_once $_SERVER['DOCUMENT_ROOT'].'/models/connect/conexion.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo get_UrlBase('css/estilo.css') ?>">
</head>
<body>
    
    <?php
        
        

        session_start();

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $v_username = "";
            $v_password = "";

            if($_POST["txtusername"]) {
                $v_username = $_POST["txtusername"];
            }

            if($_POST["txtpassword"]) {
                $v_password = $_POST["txtpassword"];
            }

            if ($v_username == "admin" && $v_password == "1234") {
                $_SESSION["txtusername"] = $v_username;
                $_SESSION["txtpassword"] = $v_password;

            header('Location: '.get_views('dashboard.php'));
                 // Detener el script después de redireccionar
            } else {
            header('Location: '.get_views('claveequivocada.php'));
            
            }
        }
        if (isset($_SESSION["txtusername"])) {
            header('Location: '.get_views('dashboard.php'));
            
        }

    ?>
        <div class="ladoderecho">
            <div class = "imagen-formulario">
            </div>
            <h2 class="login-header">Login</h2>
            <form action="" method="post" autocomplete="off" >
                <!-- <input type="text" id="txtusername" name="txtusername" placeholder="username" required> -->
                <label for="txtusername">Username</label>
                <input type="text" id="txtusername" name="txtusername" placeholder="username" required autocomplete= "off">

                <!-- <input type="password" id="txtpassword" name="txtpassword" placeholder="password" required> -->
                <label for="txtpassword">Password</label>
                <input type="password" id="txtpassword" name="txtpassword" placeholder="password" required autocomplete= "off">

                
                <div class="button-group">
                <input type="submit" value="Login">

                </div>
                

                <div class="remember-me">
                    <input type="checkbox" id="remember" >
                    <label for="remember">Remember Me</label>
                    
                </div>
            </form>

    </div>
</body>
</html>