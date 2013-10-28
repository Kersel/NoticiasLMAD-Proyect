<html lang="es">
	<head>
		<title>Perfil Administrador</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" media="all" href="css/IndexPlantilla.css">
		<link rel="stylesheet" type="text/css" media="all" href="css/style.css">
		<link rel="stylesheet" type="text/css" media="all" href="css/Acordion.css">
		<link rel="stylesheet" type="text/css" media="all" href="css/PerfilUsuario.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/buttons.css"> 
		<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
		<script type="text/javascript" src="js/buttonns.js"></script>
		<script src="js/jquery.js"></script>
		<script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
		<script src="js/Acordion.js" type="text/javascript"></script>
		
		<script >
			$(document).ready(function()
			{
				$('#nav li').hover(function()
				{
					$(this).find('#subnav').fadeIn(400);

				},function()
				{
					$(this).find('#subnav').fadeOut(100);
				});				
			});
		</script>
<?php /*
    include ("Registrar.php");
        //uso de la funcion verificar_usuario()
        if (verificar_usuario()){
                //si el usuario es verificado puede acceder al contenido permitido a el
               echo "Hola $_SESSION[email]";
                
        } else {
                //si el usuario no es verificado volvera al formulario de ingreso
                header('Location: index.php');
        }
        if (verificar_usuario()){
            session_unset();
            session_destroy();
            header ('Location:index.php');
        } else {
            header ('Location:index.php');
            }
        */
?>
	</head>
	<body id="BsqNoticias">
		<div class="logo">
			<div class="Login">				
					<form id="form" name="form" method="POST">						
						<label class="loginText">Email</label>
						<input type="text" name="email" id="name" class="loginInput" placeholder="Email" />
						<label class="loginText">Password</label>
						<input type="password" name="pass" id="pass" class="loginInput" placeholder="Password" />				
						<div class="botones">
							<button type="submit" class="Boton" >Sign Out</button>
							<!--<button type="submit" class="BotonRegis" >Registrate!</button>-->
						</div>
					</form>			
			</div>
		</div><!-- Logo Encabezado -->
		<br>
		<div class="container2">
			<div>
			    <ul id="nav">
			        <li class="currentDos"><a href="#">Inicio</a></li>
			        <li><a href="#">Local</a>
			            <ul id="subnav">
			                <li><a href="#">Elemento 1</a></li>
			                <li><a href="#">Elemento 2</a></li>
			                <li><a href="#">Elemento 3</a></li>		                
			            </ul>
			        </li>
	        		<li><a href="#">Internacional</a>
	        			<ul id="subnav">
			                <li><a href="#">Elemento 1</a></li>
			                <li><a href="#">Elemento 2</a></li>
			                <li><a href="#">Elemento 3</a></li>		                
			            </ul>
	        		</li>
	        		<li><a href="#">Contactanos</a></li>
	        		<li><input type="text" name="busqueda" id="search" placeholder="Buscar" /></li>
	    		</ul>	    		
			</div>					
			<hr>
			<div id="accordion-container"> 
     			<h2 class="accordion-header">Datos Personales</h2> 
     			<div class="accordion-content"> 
     				<!--
						 `facebook`, `twitter`, `foto`,`fechaIngreso`,`nickname`, `descripcion`,`activo`, `fkPerfil`, ``fkOrdenamiento`, `totalComentarios`
	
     					-->
          			
						<img src="images/thumb_small.jpg">
						<fieldset>
						<legend>Datos Personales</legend>
                                                <?php session_start(); ?>
							<form name="dateUser" id="dateUser" method="POST">                                                            
								<label class="lbldateUser">Nombre</label>
								<input type="text" name="nombre" class="txtdateUser" values="<?php $_SESSION['nombre']; ?>">
								<label class="lbldateUser">Nickname</label>
								<input type="text" name="nick" class="txtdateUser">
								<label class="lbldateUser">Apellidos</label>
								<input type="text" name="apellidos" class="txtdateUser" value="<?php $_SESSION['apePat']; ?>">
								<label class="lbldateUser">Edad</label>
								<input type="text" name="edad" class="txtdateUser">
								<label class="lbldateUser">Email</label>
								<input type="text" name="email" class="txtdateUser" value="<?php $_SESSION['correo']; ?>">
								<label class="lbldateUser">Telefono</label>
								<input type="text" name="telefono" class="txtdateUser">
								<div class="divRadio2">
									<input type="radio" name="genero">Hombre</input>
								</div>							
								<div class="divRadio2">
									<input type="radio" name="genero">Mujer</input>
								</div>						
								<button type="submit">Actualizar</button>
							</form>
						</fieldset>
				</div><!--PERFIL USUARIO--> 
     			
     			<h2 class="accordion-header">Datos de la Cuenta</h2> 
     			<div class="accordion-content"> 
          			
						<fieldset>
						<legend>Datos de la cuenta</legend>
							<form name="dateUser" id="dateUser">
								<label class="lbldateUser">Nickname</label>
								<input type="text" name="nickDateCuenta" class="txtdateUser">
								<label class="lbldateUser">Twitter</label>
								<input type="text" name="twitter" class="txtdateUser">
								<label class="lbldateUser">Facebook</label>
								<input type="text" name="facebook" class="txtdateUser">
								<label class="lbldateUser">Password</label>
								<input type="password" name="pass" class="txtdateUser">					
								<label class="lbldateUser">Nuevo Password</label>
								<input type="password" name="nuevopass" class="txtdateUser">
								<input type="checkbox" name="ckMostrasPass" id="checkPass" value="1">Mostrasr Contraseña
								<br>
								<label>Seleccionar foto:</label>
								<input type="file" name="archivo_foto">
								<button type="submit">Actualizar</button>
							</form>
						</fieldset>
     			</div>

     			<h2 class="accordion-header">Agregar Secciones</h2> 
     			<div class="accordion-content">          			
						<fieldset>
						<legend>Datos de la cuenta</legend>
							<form name="dateUser" id="dateUser">
								<label class="lbldateUser">Nombre Seccion</label>
								<input type="text" name="nombreSecc" class="txtdateUser">
								<button type="submit">Agregar</button>
							</form>
						</fieldset>
     			</div>
			</div><!--DIV ACORDEON-->
		</div><!--Conainer-->
		<div class="PiePagina"></div><!--Pie de Pagina-->
	</body>
</html>
