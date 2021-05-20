<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Fichero control de seguridad</title>
        <style>
            body {
            background-color: rgb(208, 236, 239 );
            text-align: center;
            padding-top: 8%;
            }
        </style>
    </head>
    <body>
        <?php

            include "usuario.php";
            $user=new usuario();

            if(isset($_POST["accion"])){
                //registro de usuario
                    
                if($_POST["accion"]=="registro"){
                    if($_POST["pass0"]==$_POST["pass1"]){
                        
                        $usuarioReg=$user->insertarUsuario($_POST["nombre"],$_POST["usuario"],$_POST["pass0"],$_POST["email"]);
                        
                        if($usuarioReg!=null){
                            echo "<h2>Usuario bien registrado</h2><br>";
                           
                            echo "<p>Nombre usuario: ".$usuarioReg["nombre"]."</p>";
                          
                           
                           
                            echo  "<p>Usuario: ".$usuarioReg["usuario"]."</p>";

                             echo "<p>Email: ".$usuarioReg["email"]."</p>";
                            //estoy probando esto
                            //echo "<br><center><a href=login.php>Ir a login</a></center>";
                            echo "<a href=index.php>Volver al index</a><br>";
                            echo "<a href=cerrar.php>Cerrar sesión</a>";
                        }else if( $usuarioReg["usuario"]==null){
                            //usuario no insertado
                            echo "<h2>El usuario no ha sido insertado, revise los datos</h2><br>";
                            echo "<a href=index.php> Volver al formulario de registro</a>";
                        }
                    }else{
                        //pass diferentes
                        echo "<h2> Las contraseñas no son iguales</h2><br>";
                        echo "<a href=index.php>Volver al formulario de registro </a>";
                    }
                }else if ($_POST["accion"]=="login"){
                    $usuarioReg=$user->buscarUsuario($_POST["usuario"]);
                    if ($usuarioReg!=null){
                        //comparamos los pass
                        if ($usuarioReg["pass"]==sha1($_POST["pass0"])){
                            echo "<h2>Usuario encontrado</h2><br>";
                           
                            echo "<p>Nombre usuario: ".$usuarioReg["nombre"]."</p>";
                          
                           
                           
                            echo  "<p>Usuario: ".$usuarioReg["usuario"]."</p>";

                            echo "<p>Email: ".$usuarioReg["email"]."</p>";
                            echo "<a href=index.php>Volver al index</a>";
                            echo "<a href=cerrar.php>Cerrar sesión</a>";
                        }else{
                            echo "<h2>Las contraseñas no coinciden</h2><br>";
                            echo "<a href=login.php>Volver al LOGIN</a>";
                        }
                    }
                }
            }
        ?>
    </body>
</html>