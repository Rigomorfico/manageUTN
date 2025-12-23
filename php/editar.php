<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="../imgs/favicon.ico">
	<title>EDITAR REGISTRO</title>
	<!-- Se llama bootstrap -->
	<link rel="stylesheet" type="text/css" href="../Estilos/bootstrap.css">
	<!-- Se llaman estilos propios -->
	<link rel="stylesheet" type="text/css" href="../Estilos/servicios.css">
</head>
<body>
		<!-- Barra de navegacion / Header -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
		<div class="container">
		<div class="container-fluid">
    		<a class="navbar-brand" href="../index.php">
    			<!-- Logo con texto para pantallas md > xl -->
    			<img src="../imgs/logo.png" alt="" width="300" height="45" class="d-inline-block align-text-top img-fluid">
    		</a>
    		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      			<span class="navbar-toggler-icon"></span>
    		</button>
    		<div class="collapse navbar-collapse" id="navbarSupportedContent">
      			<ul class="navbar-nav me-auto mb-2 mb-lg-0 w-100 justify-content-end">
        			<li class="nav-item">
          				<a class="nav-link active" aria-current="page" href="../index.php">
          					Inicio
          					<span class="sr-only">(current)</span>
          				</a>
        			</li>
        			<li class="nav-item">
          				<a class="nav-link" href="../altas.php">Altas</a>
        			</li>
      			</ul>
    			</div>
    		</div>
  		</div>
	</nav>

	<!-- INSERTANDO BREADCRUMS -->
	<nav aria-label="breadcrumb">
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="../index.php">Inicio</a></li>
	    <li class="breadcrumb-item"><a href="../altas.php">Altas</a></li>
	    <li class="breadcrumb-item"><a href="#">Editar</a></li>
	  </ol>
	</nav>

	<br><br>

	<?php 
		$id=$_POST["id"];
		$nombre=$_POST["nombre"];
		$usu=$_POST["usu"];
		$contra=$_POST["contra"];

		if (isset($_POST["editar2"])) {
			include("conexion.php");

			$getmysql=new mysqlconex();
			$getconex=$getmysql->conex();

			$query="UPDATE personal SET responsable=?,user=?,pass=? WHERE id=?";
			$sentencia=mysqli_prepare($getconex,$query);
			mysqli_stmt_bind_param($sentencia,"sssi",$nombre,$usu,$contra,$id);
			mysqli_stmt_execute($sentencia);

			#saber que se ejecutaron las filas afectadas
			$afectado=mysqli_stmt_affected_rows($sentencia);

			if ($afectado==1) {
				// code...
				echo "<script>
					alert('El usuario $usu se edito correctamente ☺'); location.href='../altas.php';
				</script>";
			}else {
				echo "<script>
					alert('El usuario $usu NO se edito correctamente :c'); location.href='../altas.php';
				</script>";
			}
			mysqli_stmt_close($sentencia);
			mysqli_close($getconex);
		}
	 ?>
	 <div class="bg-light" style="margin-left:20%; margin-right:20%; padding-left: 10%; padding-right: 10%;">
		<form action="editar.php" method="POST">

			<input type="hidden" value="<?php echo $id ?>" name="id">
			<div class="form-group">
				<label for="nombre">Nombre del responsable: </label>
				<br>
				<input class="dt" type="text" name="nombre" id="nombre" value="<?php echo $nombre ?>">
			</div>

			<div class="form-group">
				<label for="usu">Usuario: </label> 
				<br>
				<input class="dt" type="text" name="usu" id="usu" value="<?php echo $usu ?>">
			</div>
			<div class="form-group">
				<label for="contra">Contraseña: </label> 
				<br>
				<input class="dt" type="text" name="contra" id="contra" value="<?php echo $contra ?>">
			</div>

			<div class="" style="width: 100%; text-align: center;">
				<input class="bp" type="submit" name="editar2" value="editar">
			</div>
			
		</form>
	</div>

	<!-- Sección de importación de bootstrap -->
	<script src="../Javascript/jquery-3.5.1.slim.min.js" type="text/javascript"></script>
	<script src="../Javascript/popper.min.js"></script>
	<script src="../Javascript/bootstrap.min.js"></script>
	
</body>
</html>