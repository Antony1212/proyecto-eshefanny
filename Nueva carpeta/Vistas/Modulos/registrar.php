<?php
$registrar = new TareasC();
$registrar->registrarEmpleadosC();

?>
<main>
	<div class="container">
<br>  <!-- Vistas/Modulos/registrar.php -->

<div class="container">		
		<div class="mansonry row col m6 s12" style="position: relative" >
                <h3>REGISTRAR UN EMPLEADO</h3>

<form method="post" action="">
	
        <div class="row">
        <div class="input-field col s12">
          <input id="nombreR" type="text" class="validate" name="nombreR"  required>
          <label for="nombreR">Titulo</label>
          <span class="helper-text" data-error="Completa el campo" data-success="campo completado">complete este campo</span>
        </div>
      </div>
	
        <div class="row">
        <div class="input-field col s12">
          <textarea id="apellidoR" class="materialize-textarea" name="apellidoR"  required></textarea>
          <label for="apellidoR">Contenido</label>
          <span class="helper-text" data-error="Completa el campo" data-success="campo completado">complete este campo</span>
        </div>
      </div>
	
	      Fecha de Registro <input type='datetime-local' name= 'f_registro'><br>
        Fecha de Vencimiento <input type='datetime-local' name= 'f_vencimiento'><br>
	      Prioridad De La Tarea : <select name='Prioridad'>
            <option value='1'>Alta</option>
            <option value='2'>Media</option>
            <option value='3'>Baja</option>
         </select>
        
         <button class="btn waves-effect waves-light findbtn" type="submit" value="registrar"  >Registrar Tarea<i class="material-icons right">add</i></button>
  </button>
</form>

 </div>
 </div>
 </main>
		