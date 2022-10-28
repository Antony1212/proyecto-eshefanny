<?php  //Modelos/empleadosM.php
require_once "conexionBD.php";

class TareasM extends ConexionBD{
 
    public function registrarEmpleadosM($datosC, $tablaBD){
        $cbd = ConexionBD::cBD();
        
        $nombre = $datosC['titulo'] ;
        $apellido = $datosC['contenido'];
        $email = $datosC['fr'];
        $salario =  $datosC['fv'] ;
        $fechaactual= $datosC['prioridad'] ;
        $id_u=$datosC['id_u'];
        $query = "INSERT INTO $tablaBD VALUES 
            ('$nombre', '$apellido',  '$email' , '$salario',' $id_u',  '$fechaactual',null ,'Pendiente' ,'Privado')";

        $result = $cbd->query($query);

        return $result;
    }
    public function registrarUsuarioM($datosC, $tablaBD){
        $cbd = ConexionBD::cBD();
        
        $nombre = $datosC['nombreR'] ;
        $apellido = $datosC['apellidoR'];
        $email = $datosC['email'];
        $Nacimiento =  $datosC['Nacimiento'] ;
        
        $id_u=$datosC['id_u'];
        $query = "INSERT INTO $tablaBD VALUES 
            ('$nombre', '$apellido',  '$email' , '////',' $id_u','$Nacimiento')";

        $result = $cbd->query($query);
         

        return $result;
    }

    public function mostrarEmpleadosM($tablaBD){
        $cbd = ConexionBD::cBD();
        
        $id_u = htmlspecialchars($_SESSION['id_u']);
        $query = "SELECT Titulo, Contenido, f_registro, f_vencimiento, id_tarea, prioridad, id_t, estado,privatarea  
                FROM $tablaBD WHERE id_tarea='$id_u' order by f_vencimiento desc";
        $result = $cbd->query($query);
        return $result;
    }
    public function mostrarEmpleadostodoM($tablaBD){
        $cbd = ConexionBD::cBD();
        
        
        $query = "SELECT Titulo, Contenido, f_registro, f_vencimiento, id_tarea, prioridad, id_t, estado  
                FROM $tablaBD WHERE privatarea = 'Publico' order by f_vencimiento desc";
        $result = $cbd->query($query);
        return $result;
    }

    public function mostrarUsuarioM($tablaBD){
        $cbd = ConexionBD::cBD();
        
        $id_u = htmlspecialchars($_SESSION['id_u']);
        $query = "SELECT nombre, apellido, correo, imagen, Nacimiento  
                FROM $tablaBD WHERE id_tarea='$id_u'";
        $rows = $result->fetch_array(MYSQLI_ASSOC);
        return $result;
    }
    

    public function editarEmpleadoM($datosC, $tablaBD){
        $cbd = ConexionBD::cBD();
        $id = $datosC['id_t'];
        $query = "SELECT Titulo, Contenido, f_registro, f_vencimiento, id_tarea, prioridad, id_t, estado
                FROM $tablaBD WHERE id_t='$id'";
        $result = $cbd->query($query);
        $rows = $result->fetch_array(MYSQLI_ASSOC);
        return $rows;
    }

    public function actualizarEmpleadoM($datosC, $tablaBD){
        $cbd = ConexionBD::cBD();
        
        $id = $datosC['id'] ;
        $nombre = $datosC['nombre'];
        $apellido = $datosC['apellido'];
        $puesto =  $datosC['puesto'] ;
        $salario= $datosC['salario'] ;
        

        $query = "UPDATE tarea SET Titulo='$nombre', Contenido='$apellido',f_vencimiento='$puesto', prioridad='$salario'  WHERE id_t ='$id'";
        
        $resultado = $cbd->query($query);
        return $resultado;    
    }

    public function actualizarUsuarioM($datosC, $tablaBD){
        $cbd = ConexionBD::cBD();
        
       
        $nombre = $datosC['nombre'];
        $apellido = $datosC['apellido'];
        $correo =  $datosC['Correo'] ;
        $id =  $_SESSION['id_u'] ;
        

        $query = "UPDATE $tablaBD SET nombre='$nombre', apellido='$apellido', correo='$correo'  WHERE id_u ='$id'";
        
        $resultado = $cbd->query($query);
        return $resultado;    
    }

    public function borrarEmpleadoM($datosC, $tablaBD){
        $cbd = ConexionBD::cBD();
        extract($datosC);
        $query = "DELETE FROM tarea WHERE id_t='$id_t'";
        
        $resultado = $cbd->query($query);
    }

    public function entregarEmpleadoM($datosC, $tablaBD){
        $cbd = ConexionBD::cBD();
        extract($datosC);
        $query = "UPDATE tarea SET estado = 'Entregado' WHERE `id_t` = $id_t";
        
        
        $resultado = $cbd->query($query);
    }
    public function publicoEmpleadoM($datosC, $tablaBD){
        $cbd = ConexionBD::cBD();
        extract($datosC);
        $query = "UPDATE tarea SET privatarea = 'Publico' WHERE `id_t` = $id_t";
        
        
        $resultado = $cbd->query($query);
    }

    public function recuperarContraverM($datosC, $tablaBD){
        $cbd = ConexionBD::cBD();

        $email = $datosC['email'];
        $usuario = $datosC['usuario'];   


        $query = "SELECT * FROM usuarios, datosusuario WHERE usuarios.username ='$usuario' AND datosusuario.correo='$email'";
        $result = $cbd->query($query);
       
        return $result;
    }
    public function VerificarCodM($datosC, $tablaBD){
        $cbd = ConexionBD::cBD();
        
       
        $id_u = $datosC['id_u'];  


        $query = "SELECT * from usuarios WHERE  id_u= $id_u";

        $resultado = $cbd->query($query);
        return $resultado;
    }

    public function recuperarContraM($datosC, $tablaBD, $contraseña){
        $cbd = ConexionBD::cBD();

        $codigo = rand(1000,9999);
        $password = password_hash($contraseña, PASSWORD_DEFAULT);
        $id_u = $datosC['id_u'];  
        
        $query = "UPDATE usuarios SET password = '$password' , codigo = '$codigo' WHERE id_u =$id_u ";
        
        
        $resultado = $cbd->query($query);
        return $resultado;
    }
} 
?>