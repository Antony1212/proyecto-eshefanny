<?php
$registrar = new TareasC();
$registrar->registrarUsuarioC();

?>
<br>  <!-- Vistas/Modulos/registrar.php -->


<div class="container">		
	<div class="container">		
		<div class="mansonry row col m6 s12" style="position: relative" >
        <h5>REGISTRAR DATOS DE USUARIO</h5>
            <form method="post" action="">
            	<input type="text" placeholder="Nombre" name="nombreR" required>
            	<input type="text" placeholder="Apellido" name="apellidos" required>
            	<input type="email" placeholder="example@gmail.com" name="email" required>
            	Fecha de Nacimiento <input type='date' name= 'Nacimiento' required><br> 
            	<button class="btn waves-effect waves-light findbtn" type="submit" value="registrar"  >Registrar Usuario<i class="material-icons right">account_circle</i></button>
            </form>
        </div>
    </div>
</div>