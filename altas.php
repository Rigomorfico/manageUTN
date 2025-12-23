<?php
    include_once('php/sesion_nula.php')
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Se llama bootstrap -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<!-- Se llaman estilos propios -->
	<link rel="stylesheet" type="text/css" href="css/altas.css">
	<link rel="icon" href="imgs/favicon.ico">
	<title>Dar de alta</title>

	<!-- Importacion de la biblioteca de animaciones AOS-->
	<link href="aos/dist/aos.css" rel="stylesheet"> 
</head>
<body>
	<!-- Barra de navegacion / Header -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
		<div class="container">
		<div class="container-fluid">
    		<a class="navbar-brand" href="index.php">
    			<!-- Logo con texto para pantallas md > xl -->
    			<img src="imgs/logo.png" alt="" width="300" height="45" class="d-inline-block align-text-top img-fluid">
    		</a>
    		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      			<span class="navbar-toggler-icon"></span>
    		</button>
    		<div class="collapse navbar-collapse" id="navbarSupportedContent">
      			<ul class="navbar-nav me-auto mb-2 mb-lg-0 w-100 justify-content-end">
        			<li class="nav-item">
          				<a class="nav-link" aria-current="page" href="index.php">
          					Inicio
          				</a>
        			</li>
        			<li class="nav-item active">
          				<a class="nav-link active" aria-current="page" href="altas.php">Altas</a>
          				<span class="sr-only">(current)</span>
        			</li>
        			<li class="nav-item">
          				<a class="nav-link" href="expedientes.php">Expedientes</a>
        			</li>
      			</ul>
    			</div>
    		</div>
  		</div>
	</nav>

	<!-- INSERTANDO BREADCRUMS -->
	<nav aria-label="breadcrumb">
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
	    <li class="breadcrumb-item"><a href="#">Altas</a></li>
	  </ol>
	</nav>

	<!-- INICIO DEL CONTENIDO -->
	<h1>Registrar un nuevo usuario</h1>
	<div class="bg-light" style="margin-left:20%; margin-right:20%; padding-left: 10%; padding-right: 10%;">
		<form action="php/insertar.php" method="POST">
			<div class="form-group">
				<label for="nombre">Nombre del responsable: </label>
				<br>
				<input class="dt" type="text" name="nombre" id="nombre">
			</div>

			<div class="form-group">
				<label for="usu">Usuario: </label> 
				<br>
				<input class="dt" type="text" name="usu" id="usu">
			</div>
			<div class="form-group">
				<label for="contra">Contraseña: </label> 
				<br>
				<input class="dt" type="text" name="contra" id="contra">
			</div>

			<div class="" style="width: 100%; text-align: center;">
				<input class="bp" type="submit" name="registrar" value="registrar">
			</div>
			
		</form>
	</div>

	<br>
	<div class="sp"></div>
	<br>
	<h1>Usuarios registrados</h1>
	<table border="1" class="table table-striped bg-light">
		<thead>
			<tr>
				<th scope="col">ID</th>
				<th scope="col">NOMBRE</th>
				<th scope="col">USUARIO</th>
				<th scope="col">CONTRASEÑA</th>
				<th scope="col">EDITAR</th>
				<th scope="col">ELIMINAR</th>
			<tr>
		</thead>

		<tbody>
			<?php
				include("php/conexion.php");
				$getmysql = new mysqlconex();
				$getconex=$getmysql->conex();

				$consulta="SELECT * FROM personal";
				$resultado=mysqli_query($getconex,$consulta);

				while($fila=mysqli_fetch_row($resultado)){
					echo "<tr>";
					echo "<td>".$fila[0]."</td>";
					echo "<td>".$fila[1]."</td>";
					echo "<td>".$fila[2]."</td>";
					echo "<td>".$fila[3]."</td>";
					#Editar por filas de la bd
					echo "<td>
							<form action='php/editar.php' method='POST'>
								<input type='hidden' name='id' value='".$fila[0]."'>
								<input type='hidden' name='nombre' value='".$fila[1]."'>
								<input type='hidden' name='usu' value='".$fila[2]."'>
								<input type='hidden' name='contra' value='".$fila[3]."'>
								<input type='submit' name='editar' value='editar'>
							</form>
						</td>";
					#Eliminar por filas de la bd
					echo "<td>
							<form action='php/eliminar.php' method='POST'>
								<input type='hidden' name='id' value='".$fila[0]."'>
								<input type='hidden' name='nombre' value='".$fila[1]."'>
								<input type='submit' name='eliminar' value='eliminar'>
							</form>
						</td>";
					echo "</tr>";
				}
				mysqli_close($getconex);
			?>
		</tbody>
	</table>

	<br><br>
	<div class="sp"></div>
	<br>
	<h1>Importar archivos</h1>

	<a href="importar.php">Entrar al menu</a>

	</div>
	
	<br><br><br>


	<!-- Sección de importación de bootstrap -->
	<script src="Javascript/jquery-3.5.1.slim.min.js" type="text/javascript"></script>
	<script src="Javascript/popper.min.js"></script>
	<script src="Javascript/bootstrap.min.js"></script>
	

	<!-- ANIMACIONES(AOS) -->
	<script src="aos/dist/aos.js"></script>
	<script>
  		AOS.init();
	</script>
</body>
</html>