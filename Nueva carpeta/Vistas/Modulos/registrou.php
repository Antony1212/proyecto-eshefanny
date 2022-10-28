<body class="bodyLogin">
		<div class="container">
			<div class="row">
				<div class= "col s12 m12 l8 offset-12 loginDiv">
					<div class="row loginContainer">
						<div class="col s12 m6 l6">
							<div class="col s11 offset-s1">
								<img src="Vistas/css/imagenes/logo.png" class="responsive-img" >
							</div>
						</div>
						<div class="col s12 m5 l5 offset-l1 offset-m1">
							<div class="loginTitle">
								<h5>Registrar Usuario</h5>
								<div class="col s12">

								<form method="post" action="">
									<input type="text" placeholder="Usuario" name="usuarioI" required>
									<input type="password" placeholder="Contraseña" name="claveI" required>
									<input type="password" placeholder="confirme contraseña" name="clave2" required>
									<button class="btn waves-effect waves-light findbtn" type="submit" value="registrar"  >Registrar<i class="material-icons right">add</i></button>
										
								</form>
								

								
									<div class="fixed-action-btn toolbar" id="btn-flotante"> 
										<a  class="btn-floating btn-large green" >
											<i class="large material-icons">add</i>
										</a>
										<ul> 
											<li><a href="index.php?ruta=ingreso" class="btn-floating "><i class="text">Iniciar Session </i></a></li>
											<li><a href="index.php?ruta=recuperarcontra" class="btn-floating "><i class="text">Recuperar Cuenta </i> </a></li>
											
										</ul>
									</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</div>	








<?php
$registro= new AdminC();
$registro->RegistroC();
?>