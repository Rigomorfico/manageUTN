<?php
    include_once('php/sesion_nula.php');

	include 'php/conexion.php';
	$getmysql = new mysqlconex();
    $getconex=$getmysql->conex();
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<!-- Se llama bootstrap -->
	<link rel="stylesheet" type="text/css" href="Estilos/bootstrap.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="imgs/icono.png">
	<title>Alumnos</title>
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
	    <li class="breadcrumb-item"><a href="#">Alumnos</a></li>
	  </ol>
	</nav>

	<!-- INICIO CONTENIDO -->
	<form actions="" method="get">
		<input type="text" name="busqueda"> <br>
		<input type="submit" name="enviar" value="Buscar">
	</form>
<br><br><br>

<?php

	if(isset($_GET['enviar'])) {
		$busqueda = $_GET['busqueda'];

		$consulta = $getconex->query("SELECT * FROM alumnos WHERE nombre LIKE '%$busqueda%'");

		while ($row = $consulta->fetch_array()) {
			echo $row['nombre'].'<br>';
		}
	}
?>

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