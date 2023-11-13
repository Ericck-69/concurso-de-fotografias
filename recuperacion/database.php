<?php
     class Database{
        private $con;
        private $dbhost = "localhost";
        private $dbuser = "root";
        private $dbpass = "";
        private $dbname = "concurso_fotografia";

        public function conectar(){
            $this->con = mysqli_connect($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);
            if(mysqli_connect_error()){
                die("Conexion a la base de datos falló " . mysqli_connect_error() . mysqli_connect_errno());
            }
        }

        public function sanitize($var){
            $this->conectar();
            $varlimpia = mysqli_real_escape_string($this->con,$var);
            mysqli_close($this->con);
            return $varlimpia;
        } 

        public function insertarUsuario($nombre, $contra, $correo, $idusuario, $Img){
            $this->conectar();
            $sql = "INSERT INTO `usuario` (`nombre`, `contra`, `correo`, `idusuario`,`img` ) 
            VALUES ( '$nombre','$contra',`$correo`,'$idusuario', '$Img',)";
            $res = mysqli_query($this->con, $sql);
            mysqli_close($this->con);
            if($res){
                return true;
            }else{
                return false;
            }
            
        }

        public function validarUsuario($idusuario, $contra){
            $this->conectar();
            $sql = "SELECT * FROM usuario WHERE idusuario='$idusuario' AND contra = '$contra'";
            $res = mysqli_query($this->con, $sql);
            mysqli_close($this->con);
            return $res;
        }

     }
?>