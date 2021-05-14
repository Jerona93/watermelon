<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        
    </head>
    <body>

    
    <?php
        //Este archivo solo sirve para cerrar sesión y redirigir a la web login.php
        session_start();
        $_SESSION=array();

        session_unset();

        session_destroy();
        header("Location: login.php");

    ?>

    </body>
</html>

