<?php

    include "db.php";

    class usuario extends db{

        function __construct(){
            //Aqui realizamos la conexion a la bbdd
            parent::__construct();
        }
        
        //insertamos el nuevo usuario
        function insertarUsuario($nombre, $usuario, $pass, $email){
            //se construye la consulta
            //INSERT INTO `usuario` (`Id`, `usuario`, `nombre`, `apellido`, `email`, `pass`, `rol`) VALUES (NULL, 'pepe', 'pepe', 'pepito', 'pepe@pepe.com', SHA1('1234'), 'alumno');
            $insert_sql="INSERT INTO usuario (usuario, nombre, email, pass)
             VALUES ('".$usuario."', '".$nombre."', '".$email."', '".sha1($pass)."')";
            //Se realiza la consulta
            $resultado=$this->realizarConsulta($insert_sql);
            if($resultado!=false){
                //ultimo user insertad
                $sql="SELECT * FROM usuario ORDER BY Id DESC";
                //hacemos la consulta
                $resultado=$this->realizarConsulta($sql);
                if($resultado!=false){
                    return $resultado->fetch_assoc();
                }else{
                    return null;
                }
            }else{
                return null;
            }
        }
        function buscarUsuario($usuario){
            //la construimos
            $sql="SELECT * FROM usuario WHERE usuario='".$usuario."'";
            //Hacemos la consulta
            $resultado=$this->realizarConsulta($sql);
            if($resultado!=false){
                if($resultado!=false){
                return $resultado->fetch_assoc();
            }else{
                return null;
            }
        }else{
            return null;
        }

    }
}

?>
