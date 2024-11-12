<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>

    <?php
        
        session_start();

        if ( $_SERVER ["REQUEST_METHOD"] == "POST") {

            //echo "<br>";
           // echo "SE ENVIARON LAS SIGUIENTES VARIABLES";
            //echo "<br>";
            //echo $_POST["txtusername"];
            //echo "<br>";
            //echo $_POST["txtpassword"];
            //echo "<br>";
            //echo $_POST["txtremenber "];
            //echo "<br>";

            $v_username = "";
            $v_password = "";
            $v_remenbe = "";

            if(isset( $_POST["txtusername"])) {
                $v_username = $_POST["txtusername"];

            }
            if(isset( $_POST["txtpassword"])) {
                $v_password = $_POST["txtpassword"];
                

            }
            if(isset( $_POST["txtremenber "])) {
                $v_remenbe = $_post["txtremenber"];

            }

            if (($v_username == "admin") && ($v_password == "1234") && ($v_remenbe == "1234")) {
                $_SESSION["txtusername"]=$v_username;
                $_SESSION["txtpasswprd"]=$v_password;
                $_SESSION["txtremenber"]=$v_remenbe;

                header('location : http://127.0.0.1/sistemalogin/dashboard.php');
                //echo "dashboard";
            } else {
                header('location : http://127.0.0.1/sistemaloginclaveequivocada.php');
                //echo "error en clave";

            }
        }
        
        if(isset( $_SESSION["txtusername"])) {
            header('location : http://127.0.0.1/sistemalogin/dashboard.php');


        }

    ?>
        <div class="ladoderecho">
            <div class = "imagen-formulario">
                
            </div>

            <form action="" methop="post">
            

                <input type="text" id="txtusername" name="txtusername" placeholder="username" required>

                <input type="password" id="txtpassword" name="txtpassword" placeholder="password" required>

                <input type="text" id="txtremenber " name="txtremenber" placeholder="remenber " required>
                
                <div class="button-group">
                    <input type="submit" value="Login">
                    <input type="submit" value="Legin">
                </div>
                

                <div class="remember-me">
                    <input type="checkbox" id="remember" >
                    <label for="remember">Remember Me</label>
                    
                </div>
            </form>

    </div>
</body>
</html>