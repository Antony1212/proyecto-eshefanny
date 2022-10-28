<?php
$tarea = new TareasC();
$resultado = $tarea->editarEmpleadoC();
$tarea->actualizarEmpleadoC();
$C=$_SESSION['apellido'];
echo "$C";
?>
<br>
<main>
	<div class="container">
		
	<div class="container">		
		<div class="mansonry row col m6 s12" style="position: relative" >
		<div class="row">
    		
			
<h3>Editar Tarea</h3>
<form method="post" action="">
	
    <input type="hidden" value="<?=$resultado['id_t']?>" name="id_t" required>
	<div class="row">
    <div class="input-field col s6">
      <input value='<?=$resultado['Titulo']?>' id="nombreE" type="text" class="validate" name="nombreE"  required>
      <label class="active" for="nombreE">Editar Titulo de tarea</label>
    </div>
  </div>
Editar contenido
  <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">mode_edit</i>
          <textarea id="apellidoE" class="materialize-textarea" value='<?=$resultado['f_vencimiento']?>' name="apellidoE"></textarea>
          <label for="apellidoE"><?=$resultado['Contenido']?></label>
        </div>
      </div>
	
	
	Fecha de Vencimiento
	<input type="datetime-local" placeholder="Puesto" name="puestoE" value='<?=$resultado['f_vencimiento']?>' required>

	<div class="input-field col s12">
    <select name="salarioE"  value= '<?=$resultado['prioridad']?>'>
      
      <option value="1">Alto</option>
      <option value="2">Medio</option>
      <option value="3">Bajo</option>
    </select>
    <label>Importacia de tarea</label>
  </div>

	
	<button class="btn waves-effect waves-light findbtn" type="submit" value="Actualizar" name ="actualizar" >Editar Tarea<i class="material-icons right">send</i></button>
										
</form>

</div>
 </div>
 </div>
 </main>