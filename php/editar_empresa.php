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
          				<a class="nav-link active" aria-current="page" href="../empresasconfig.php">
          					Inicio
          					<span class="sr-only">(current)</span>
          				</a>
        			</li>
        			<li class="nav-item">
          				<a class="nav-link" href="../empresasconfig.php">Altas</a>
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
		$id 				=$_POST["idEmp"];
		$razon_social		=$_POST["razSoc"];
		$nombre_comercial	=$_POST["nomCom"];
		$giro_empresa		=$_POST["giroEmp"];
		$telefono_empresa	=$_POST["telEmp"];
		$domicilio_empresa	=$_POST["domEmp"];
		$ciudad 			=$_POST["ciudad"];
		$estado 			=$_POST["estado"];
		$nivel 				=$_POST["nivel"];
		$carrera 			=$_POST["carrera"];

		if (isset($_POST["editarEmp"])) {
			include("conexion.php");

			$getmysql=new mysqlconex();
			$getconex=$getmysql->conex();

			$query="UPDATE empresas_estadias SET
			razon_social =?,
			nombre_comercial =?,
			giro_empresa =?,
			telefono_empresa =?,
			domicilio_empresa =?,
			ciudad =?,
			estado =?,
			nivel =?,
			carrera =?
			WHERE id=?";
			$sentencia=mysqli_prepare($getconex,$query);
			mysqli_stmt_bind_param($sentencia,"sssssssssi",
				$razon_social,
				$nombre_comercial,
				$giro_empresa,
				$telefono_empresa,
				$domicilio_empresa,
				$ciudad,
				$estado,
				$nivel,
				$carrera,
				$id);

			mysqli_stmt_execute($sentencia);

			#saber que se ejecutaron las filas afectadas
			$afectado=mysqli_stmt_affected_rows($sentencia);

			if ($afectado==1) {
				// code...
				echo "<script>
					alert('La empresa $nombre_comercial se edito correctamente ☺'); location.href='../empresasconfig.php';
				</script>";
			}else {
				echo "<script>
					alert('La empresa $nombre_comercial NO se edito correctamente :c'); location.href='../empresasconfig.php';
				</script>";
			}
			mysqli_stmt_close($sentencia);
			mysqli_close($getconex);
		}
	 ?>
	 <div class="mx-auto col-12 bg-primary text-center">
	 	<h1>EDITAR EMPRESAS DE ESTADIA</h1>
	 </div>
	 
	 <div class="bg-light" style="margin-left:20%; margin-right:20%; padding-left: 10%; padding-right: 10%;">
		<form action="editar_empresa.php" method="POST">

			<input type="hidden" value="<?php echo $id ?>" name="idEmp">
			<div class="form-group">
				<label for="razSoc">Razón Social: </label>
				<br>
				<input class="dt" type="text" name="razSoc" id="razSoc" value="<?php echo $razon_social ?>">
			</div>

			<div class="form-group">
				<label for="nomCom">Nombre Comercial: </label> 
				<br>
				<input class="dt" type="text" name="nomCom" id="nomCom" value="<?php echo $nombre_comercial ?>">
			</div>
			<div class="form-group">
				<label for="giroEmp">Giro de la empresa: </label> 
				<br>
				<input class="dt" type="text" name="giroEmp" id="giroEmp" value="<?php echo $giro_empresa ?>">
			</div>

			<div class="form-group">
				<label for="telEmp">Telefono empresa: </label>
				<br>
				<input class="dt" type="text" name="telEmp" id="telEmp" value="<?php echo $telefono_empresa ?>">
			</div>

			<div class="form-group">
				<label for="domEmp">Domicilio empresa: </label>
				<br>
				<input class="dt" type="text" name="domEmp" id="domEmp" value="<?php echo $domicilio_empresa ?>">
			</div>

			<div class="form-group">
				<label for="ciudad">Ciudad: </label>
				<br>
				<input class="dt" type="text" name="ciudad" id="ciudad" value="<?php echo $ciudad ?>">
			</div>

			<div class="form-group">
				<label for="estado">Estado: </label>
				<br>
				<input class="dt" type="text" name="estado" id="estado" value="<?php echo $estado ?>">
			</div>

			<div class="form-group">
				<label for="nivel">Nivel: </label>
				<br>
				<input class="dt" type="text" name="nivel" id="nivel" value="<?php echo $nivel ?>">
			</div>

			<div class="form-group">
				<label for="nombre">carrera: </label>
				<br>
				<input class="dt" type="text" name="carrera" id="carrera" value="<?php echo $carrera ?>">
			</div>

			<div class="" style="width: 100%; text-align: center;">
				<input class="bp" type="submit" name="editarEmp" value="editarEmp">
			</div>
			
		</form>
	</div>

	<!-- Sección de importación de bootstrap -->
	<script src="../Javascript/jquery-3.5.1.slim.min.js" type="text/javascript"></script>
	<script src="../Javascript/popper.min.js"></script>
	<script src="../Javascript/bootstrap.min.js"></script>
	
</body>
</html>