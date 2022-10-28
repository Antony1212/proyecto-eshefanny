<?php  //Modelos/adminM.php
    require_once "conexionBD.php";

    class AdminM extends ConexionBD{
        static public function IngresoM($datosC, $tablaBD){
            $cbd = ConexionBD::cBD();
            $usuario = $datosC['usuario'];
            $clave = $datosC['clave'];

            $un_temp =  $datosC['usuario'];
            $pw_temp =  $datosC['clave'];

            $query = "SELECT * FROM $tablaBD WHERE username='$usuario'";

            $result = $cbd->query($query);
            return $result;
        }
        static public function RegistroM($datosC, $tablaBD){
            $cbd = ConexionBD::cBD();
            $codigo= rand(1000,9999);
            $usuario =   $datosC['usuario'];
            $clave =  $datosC['clave'];
            $password = password_hash($clave, PASSWORD_DEFAULT);
            
            $query="INSERT INTO  $tablaBD (id_u,username,password,codigo)  VALUES (null,'$usuario','$password',$codigo)";
            $result = $cbd->query($query);

            return $result;
            
            
        }
        static public function guardarUsuarioM($id_u){
            $cbd = ConexionBD::cBD();
            
           
            $query = "SELECT nombre, apellido, correo, imagen, Nacimiento  
                    FROM datosusuario WHERE id_u='$id_u'";
            $result = $cbd->query($query);
            return $result;
        }
        

    }
    
?>