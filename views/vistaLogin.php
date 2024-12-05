<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo get_UrlBase('css/estilo.css') ?>">
</head>
<body>
<div class="ladoderecho">
            <div class = "imagen-formulario">
            </div>
            <h2 class="login-header">Login</h2>
            <form action="/controllers/controladorLogin.php" method="post" autocomplete="off" >
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
