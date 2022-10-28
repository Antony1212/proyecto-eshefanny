<?php
$tarea = new TareasC();
$pagina = $tarea->mostrarEmpleadostodoC();

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
		

			
	<div class="container">		
		<div class="mansonry row col m6 s12" style="position: relative" >
			<div class="card">
			<?php 
			if (($value['f_vencimiento']<$fechaactual)&&($value['estado']=="Pendiente")){

				?>	<table id="t1" border="1" class="striped red">  <?php
				$estado="Vencido";

			}
			if(($value['f_vencimiento']>$fechaactual)&&($value['estado']=="Pendiente")){

				?>	<table id="t1" border="1" class="striped orange"> <?php
				$estado="Pendiente";

			}
			if($value['estado']=="Entregado"){
				?>	<table id="t1" border="1" class="striped green"> <?php
				$estado="Entregado";
			}
		 ?>	
			
				
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
						<td><?=$estado?></td>
					</tr>

				</tbody>
		</table>
	</div>
 </div>
 </div>
 

	<?php  endforeach;  ?>

	</main>

