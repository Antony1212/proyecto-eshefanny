<?php if($rutasC->sesionIniciadaC()): ?>
  
	<?php else: 
  if (isset($_SESSION['nombre']))
  {
    $N=$_SESSION['nombre'];
    $A=$_SESSION['apellido'];
   $C=$_SESSION['correo'];

   ?>
   <header>
      <div class="navbar-fixed">
        <nav class="navbar white">
          <div class="nav-wrapper ">
            <ul id="nav-mobile" class="right navcolor" data-target="sidenav-bar">
            <li>
              <a class="dropdown-trigger" href="#!" data-target="dropdown1">
              <i class="material-icons black-text">settings</i></a></li>
            </ul><a  href="#" data-target="sidenav-left" class="sidenav-trigger left"><i class="material-icons black-text">menu</i></a>
          </div>
        </nav>
      </div>
      
        </li>
      </ul>

      
      
    </header>
    
        
      </div>

    </div>
  </div>
</div>

<ul id="sidenav-left" class="sidenav sidenav-fixed" style="transform: translateX(-105%);">

			<li>
				<div class="user-view">
					<div class="background">
					<img src="Vistas/css/imagenes/logo.jpg" alt="">
					</div>
					<a href="#" class="circle">
						<img src="Vistas/css/imagenes/logo.png" alt="" class="circle"></a>
						<a href="#name"><span class="black-text name"><b><?="$N $A"?> </b></span></a>
      					<a href="#email"><span class="black-text email"><b><?="$C"?></b></span></a>
				</div>
			</li>
        <li><a class="waves-effect" href="index.php?ruta=registrar"><i class="material-icons">add_task</i>Crear Nueva Tarea</a></li>
        <li><div class="divider"></div></li>
        <li><a class="waves-effect" href="index.php?ruta=empleados"><i class="material-icons">history</i>Mostrar Tareas Pendientes</a></li>
        <li><div class="divider"></div></li>
        <li><a class="waves-effect" href="index.php?ruta=archivado"><i class="material-icons">done_outline</i>Mostrar Tareas Entregadas</a></li>
        <li><div class="divider"></div></li>
        <li><a class="waves-effect" href="index.php?ruta=vencido"><i class="material-icons">warning</i>Mostrar Tareas Vencidas</a></li>
        <li><div class="divider"></div></li>
        <li><a class="waves-effect" href="index.php?ruta=todo"><i class="material-icons">list</i>Mostrar Todas Las Tareas</a></li>
        <li><div class="divider"></div></li>
        <li><a class="waves-effect" href="index.php?ruta=todotareas"><i class="material-icons">list-all</i>Mostrar Las Tareas Publicas </a></li>
		</ul>

		<ul id="dropdown1" class="dropdown-content "  >
    <li><a href="index.php?ruta=editarusuario"><i class="material-icons">account_circle</i>Editar   Perfil</a></li>
    <li><a href="index.php?ruta=salir"><i class="material-icons">power_settings_new</i>Cerrar Session</a></li>
		</ul>

   <?php


    
  }else{
    ?>

<header>
      <div class="navbar-fixed">
        <nav class="navbar white">
          <div class="nav-wrapper ">
            <ul id="nav-mobile" class="right navcolor" data-target="sidenav-bar">
            <li>
              <a class="dropdown-trigger" href="#!" data-target="dropdown1">
              <i class="material-icons black-text">settings</i></a></li>
            </ul><a  href="#" data-target="sidenav-left" class="sidenav-trigger left"><i class="material-icons black-text">menu</i></a>
          </div>
        </nav>
      </div>
      
        </li>
      </ul>

      
      
    </header>
    
        
      </div>

    </div>
  </div>
</div>

<ul id="sidenav-left" class="sidenav sidenav-fixed" style="transform: translateX(-105%);">

			<li>
				<div class="user-view">
					<div class="background">
					<img src="Vistas/css/imagenes/logo.jpg" alt="">
					</div>
					<a href="#" class="circle">
						<img src="Vistas/css/imagenes/logo.png" alt="" class="circle"></a>
						
				</div>
			</li>
        
		</ul>

		<ul id="dropdown1" class="dropdown-content "  >
    <li><a href="index.php?ruta=editarusuario"><i class="material-icons">account_circle</i>Editar Perfil</a></li>
    <li><a href="index.php?ruta=salir"><i class="material-icons">power_settings_new</i>Cerrar Session</a></li>
		</ul>

    <?php
  }  
    
    ?>


		

	
		

		
			
			

		
		
	
		
	





		
	<?php endif; ?>


