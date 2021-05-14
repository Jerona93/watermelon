<?php

    class db {

        private $host="localhost";
        private $user="root";
        private $pass="";
        private $db_name="usuarioes";

        //conector
        private $conexion;

        //propiedades para controlar los errores
        private $error=false;
        private $error_msj="";


        function __construct(){
            $this->conexion = new mysqli($this->host, $this->user, $this->pass, $this->db_name);
            if ($this->conexion->connect_errno){
                $this->error=true;
                $this->error_msj="No se puede realizar la conexion a la BBDD";
            }

        }
      
        //Funcion para saber si hay error en la conexion
        function hayError(){
            return $this->error;
        }

        //funcion que devuelve mensaje de error
        function msjError(){
            return $this->error_msj;
        }

        //metodo para realizar consultas

        public function realizarConsulta($consulta){
            if($this->error==false){
                $resultado =$this->conexion->query($consulta);
                return $resultado;
            }else{
                $this->error_msj="Imposible realizar consulta: ".$consulta;
                return null;
            }
        }


    }
?>