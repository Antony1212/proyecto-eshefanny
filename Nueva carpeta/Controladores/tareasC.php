<?php  // Controladores/empleadosC.php
class TareasC {
    function __construct(){
        $this->tareasM = new TareasM();
    }

    public function registrarEmpleadosC(){
        if(isset($_POST['nombreR'])){
            
            $datosC =array();
            $datosC['titulo'] = $_POST['nombreR'];
            $datosC['contenido'] = $_POST['apellidoR'];
            $datosC['fr'] = $_POST['f_registro'];
            $datosC['fv'] = $_POST['f_vencimiento'];
            $datosC['prioridad'] = $_POST['Prioridad'];
            $datosC['id_u'] = htmlspecialchars($_SESSION['id_u']);


            $tablaBD = 'tarea';

            
            
            $pagina = $this->tareasM->registrarEmpleadosM($datosC, $tablaBD);
         
            header('location: index.php?ruta=empleados');

        }
    }
    public function registrarUsuarioC(){
        if(isset($_POST['nombreR'])){
            
            $datosC =array();
            $datosC['nombreR'] = $_POST['nombreR'];
            $datosC['apellidoR'] = $_POST['apellidos'];
            $datosC['email'] = $_POST['email'];
            $datosC['Nacimiento'] = $_POST['Nacimiento'];
            
            $datosC['id_u'] = htmlspecialchars($_SESSION['id_u']);


            $tablaBD = 'datosusuario';

            
            
            $pagina = $this->tareasM->registrarUsuarioM($datosC, $tablaBD);
            

            header('location: index.php?ruta=salir');
         
            

        }
    }

    //mostrar empleados
    public function mostrarEmpleadosC(){
        $tablaBD = 'tarea';
        $pagina = $this->tareasM->mostrarEmpleadosM($tablaBD);
        return $pagina;
    }
    public function mostrarEmpleadostodoC(){
        $tablaBD = 'tarea';
        $pagina = $this->tareasM->mostrarEmpleadostodoM($tablaBD);
        return $pagina;
    }
    public function mostrarUsuarioC(){
        $tablaBD = 'datosusuaario';
        $pagina = $this->tareasM->mostrarUsuarioM($tablaBD);
        return $pagina;
    }

    //editar empleados
    public function editarEmpleadoC(){
        if(isset($_GET['id_t'])){
            $datosC = array(
                'id_t'=>$_GET['id_t']);
                
            $tablaBD = 'tarea';
            $pagina = $this->tareasM->editarEmpleadoM($datosC, $tablaBD);
            return $pagina;
        }
    }

    //actualizar empleados
    public function actualizarEmpleadoC(){
        if(isset($_POST['actualizar'])){
            $datosC = array(    'id'=>$_POST['id_t'],
                                'nombre'=>$_POST['nombreE'],
                                'apellido'=>$_POST['apellidoE'],
                                
                               'puesto' => $_POST['puestoE'],
                                'salario' => $_POST['salarioE'],
                          );
            $tablaBD = 'tarea';
            $pagina = $this->tareasM->actualizarEmpleadoM($datosC, $tablaBD);
            header('location: index.php?rutas=empleados');
            return $pagina;
        }
    }
    public function actualizarUsuarioC(){
        if(isset($_POST['actualizar'])){
            $datosC = array(    
                                'Correo'=>$_POST['Correo'],
                                'nombre'=>$_POST['nombre'],
                                'apellido'=>$_POST['apellido'],
                          );
            $tablaBD = 'datosusuario';
            $pagina = $this->tareasM->actualizarUsuarioM($datosC, $tablaBD);
                                $_SESSION['nombre']=$_POST['nombre'];
                                $_SESSION['apellido']=$_POST['apellido'];
                                $_SESSION['correo']=$_POST['Correo'];
            header('location: index.php?rutas=empleado');
            return $pagina;
        }
    }

    public function entregarEmpleadoC(){
        if(isset($_GET['id_t'])){
            $datosC = array('id_t' => $_GET['id_t']);
            $tablaBD = 'tarea';
           
            $this->tareasM->entregarEmpleadoM($datosC, $tablaBD);
            header('location: index.php?rutas=empleados');
        }
    }
    public function publicoEmpleadoC(){
        if(isset($_GET['id_t'])){
            $datosC = array('id_t' => $_GET['id_t']);
            $tablaBD = 'tarea';
           
            $this->tareasM->publicoEmpleadoM($datosC, $tablaBD);
            header('location: index.php?rutas=empleados');
        }
    }

    //borrar empleado
    public function borrarEmpleadoC(){
        if(isset($_GET['id_t'])){
            $datosC = array('id_t' => $_GET['id_t']);
            $tablaBD = 'tarea';
           
            $this->tareasM->borrarEmpleadoM($datosC, $tablaBD);
            header('location: index.php?rutas=empleados');
        }
    }

    public function recuperarContraverC(){
        if(isset($_POST['usuario'])){
            $datosC = array(
                            'usuario' => $_POST['usuario'],    
                            'email' => $_POST['email']);
            $tablaBD = 'datosusuario';
           
            $pagina =  $this->tareasM->recuperarContraverM($datosC, $tablaBD);
            $email=$_POST['email'];
            if ($pagina->num_rows)
                        {
                            
                            $row = $pagina->fetch_array(MYSQLI_NUM);
                            
                            
                                $id_U=$row[2];
                                $id_Ue=$row[8];
                                $codigo=$row[3];
                                $message = "El Codigo de confirmacion  de su cuenta es: $codigo";
                                if ($id_U==$id_Ue)
                                {
                                   
                                    mail("$email", 'Recuperacion de contraseña ', $message);
                                    header("location: index.php?ruta=recuperarcontraaceptado&id_u=$id_U");

                                }
                                

                        }


            
        }
    }

    public function recuperarContraC(){
        if(isset($_POST['id_u'])){
            if($_POST['contra']==$_POST['contraconfirm']){
            $datosC = array(
                            'id_u' => $_POST['id_u'], 
                            'codigo' => $_POST['clave'],              
                            
                            'contraconfirm' => $_POST['contraconfirm']);

            $tablaBD = 'usuarios';

           
            $pagina = $this->tareasM->VerificarCodM($datosC, $tablaBD);
            $contraseña= $_POST['contraconfirm']; 
           $codigo= $_POST['clave'];
            if ($pagina->num_rows)
            {
                
                $row = $pagina->fetch_array(MYSQLI_NUM);
                
                
                    $codigom=$row[3];
                    
                    
                    
                    if ($codigo==$codigom)
                    {
                       
                        $pagina = $this->tareasM->recuperarContraM($datosC, $tablaBD,$contraseña, $codigo);
                        header("location: index.php?ruta=ingreso&mensage=editadocorrectamente");
                    }else{
                    echo "introdusca el codigo correcto ";
                    }
                    

            }
            



            
        }else{
            echo "VERIFIQUE LA  CONTRASEÑA INTENTE NUEVAMENTE ";
        }
            
        }else{
            
        }
        
        
    }

   
}
?>