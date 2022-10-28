<?php
$tarea = new TareasC();
$pagina = $tarea->mostrarEmpleadosC();
$tarea->borrarEmpleadoC();
?>
<main>
	<div class="container">
		


	

	
		
	<?php foreach($pagina as $key => $value): ?>
		<?php 
			switch ($value['prioridad']) {
				case 1:
					$prioridad="Alta";
					break;
				case 2:
					$prioridad="Media";
					break;
				case 3:
					$prioridad="Baja";
					break;
			}
		 ?>
		 <?php 
			if (($value['f_vencimiento']>$fechaactual)&&($value['estado']=="Pendiente")){

				
		 ?>
			
	<div class="container">		
		<div class="mansonry row col m6 s12" style="position: relative" >
			<div class="card">
			<table id="t1" border="1" class="striped orange">
				
				<tbody>
				
					
					<tr>
					<th>Titulo</th>
					<td><?=$value['Titulo']?></td>
					</tr>

					<tr>
					<th>Contenido</th>
					<td><?=$value['Contenido']?></td>
					</tr>

					<tr>
					<th>Fecha de Registro</th>
					<td><?=$value['f_registro']?></td>
					</tr>

					<tr>
					<th>Fecha de Entrega</th>
					<td><?=$value['f_vencimiento']?></td>
					</tr>

					<tr>
					<th>Importancia</th>
					<td><?=$prioridad?></td>
					</tr>

					<tr>
					    
        						<th>Estado de Tarea</th>
        						<td><?=$value['estado']?></td>
        						<td><a href='index.php?ruta=entregar&id_t=<?=$value['id_t']?>'>
        							<button class="btn waves-effect waves-light findbtn"><i class="material-icons left">done_all</i>Entregar</button></td>
							
					</tr>
					<tr>
					<th>Privacidad</th>
					<td><?=$value['privatarea']?></td>

					<td><a href='index.php?ruta=privacidad&id_t=<?=$value['id_t']?>'>
						<button class="btn waves-effect waves-light editaribli"><i class="material-icons left">visibility</i>Publico</button></td>	
						
					</tr>

					<tr>
					
						<td><a href='index.php?ruta=editar&id_t=<?=$value['id_t']?>'>
							<button class="btn waves-effect waves-light editarbtn"><i class="material-icons left">edit</i>Editar Tarea</button></td>
						<td><a href='index.php?ruta=empleados&id_t=<?=$value['id_t'] ?>'>
							<button class="btn waves-effect waves-light borrarbtn"><i class="material-icons left">delete</i>Borrar Tarea</button></td>
					</tr>
				</tbody>
		</table>
	</div>
 </div>
 </div>
 <?php  }  ?>
	<?php  endforeach; 
	
	
	?>
 	
	

	</main>
		
	
	
        
        
    
  
  

    

        
    


