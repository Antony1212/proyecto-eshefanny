<!DOCTYPE html>  <!-- Vistas/plantilla.php-->
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>CRUD</title>
	
	
	 <!--	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!--Import Google Icon Font-->
     <!--<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
     <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

	
	
	

	
	
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
	<link rel="stylesheet" href="font-awesone/css/all.min.css">
	<link rel="stylesheet" href="Vistas/css/estilos.css">
	
	
	<!--<link rel="stylesheet" type="text/css" href="Vistas/css/estilos.css">-->

	
	<script type="text/javascript" >
		document.addEventListener('DOMContentLoaded', function() {
    	var elems = document.querySelectorAll('.dropdown-trigger');
    	var instances = M.Dropdown.init(elems,{
			coverTrigger: false,
			constrainWidth: false
		});
		
  });

	
	</script>
	
	<script >
		$(document).ready(function(){
    $('select').formSelect();
		});
	</script>

	<script >
		$(document).ready(function(){
		$('#btn-flotante').floatingActionButton();
		$('#btn-flotante').floatingActionButton({
    	toolbarEnabled: true
  		});
		});
	</script>

	<script >
		$(document).ready(function(){
    	$('.sidenav').sidenav();
		
		$('.collapsible').collapsible(
			
		);
		$('.carousel').carousel();

		$('#textarea1').val('New Text');
  		M.textareaAutoResize($('#textarea1'));
  		});
		  
	</script>
	
<script src="Vistas/css/js/scrips.js"> </script>
	
</head>

<body >

    



	<?php

		date_default_timezone_set("America/Lima");
		
		session_start();
		$fechaactual= date('Y-m-d H:i:s');
		
		$rutasC = new RutasC();
		//if(($rutasC == "Vistas/modulos/ingreso.php")||($rutasC == "Vistas/modulos/registrarusuario.php")){

			
		//}else{

			include 'Modulos/menu.php';
			
		//}
		

	?>
	
	<section>

		<?php
			$modulo = $rutasC->procesaRutasC();
			include $modulo;
			
			
			
  		
			
		?>
	</section>
	
	
	
</body>
</html>