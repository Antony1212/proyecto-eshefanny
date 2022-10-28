<?php //  Modelos/rutasM.php
class RutasM{
    public function procesaRutasM($ruta){
        if( $ruta == "ingreso" ||
            $ruta == "recuperarcontra" || 
            $ruta == "recuperarcontraaceptado" ||   
            $ruta == 'empleados' || 
            $ruta == 'registrou' ||
            $ruta == 'registrar' ||
            $ruta == 'vencido' ||
            $ruta == 'entregar' ||
            $ruta == 'todo' ||
            $ruta == 'archivado' ||
            $ruta == 'registrarusuario' ||
            $ruta == 'salir' ||
            $ruta == 'todotareas' ||
            $ruta == 'editarusuario' ||
            $ruta == 'privacidad' ||
            $ruta == 'editar')
        {
            $pagina = "Vistas/Modulos/".$ruta. ".php";
        }
        else if($ruta == 'index'){
            $pagina = "Vistas/Modulos/ingreso.php";
        }
        else {
            $pagina = "Vistas/Modulos/ingreso.php";
        }
        
        
        return $pagina;
    }

}
?>