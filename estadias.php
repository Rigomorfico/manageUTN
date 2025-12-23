<?php
    include_once('php/sesion_nula.php')
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="imgs/icono.png">

    <title>Consumir archivos CSV</title>

    <!-- IMPORTACION BOOTSTRAP -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- ESTILOS PROPIOS -->
    <link rel="stylesheet" type="text/css" href="css/sesiones.css">
  </head>

  <body>
    <!-- Ancla de inicio -->
    <a name="inicio" href="inicio"></a>
    <!-- Barra de navegacion / Header -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary sticky-top">
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
                <a class="nav-link active" aria-current="page" href="index.php">
                  Inicio
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="altas.php">Altas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="expedientes.php">Expedientes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="importar.php">Archivos</a>
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
      <li class="breadcrumb-item"><a href="estadias.php">Estadias</a></li>
    </ol>
  </nav>
  <!-- INICIO DEL CONTENIDO -->
  <br>
  <div class="container col-12 text-center">
  	<div class="row">
  		<div class="cols-sm-12 col-md-3 bg-light">
  			<a href="excmysql.php">
  				<img src="imgs/empresa.png" width="150" height="150">
  				<br>
				<b>Empresas disponibles</b>
  			</a>
  		</div>
  		<div class="cols-sm-12 col-md-3 bg-light">
  			<a href="alumnos.php">
  				<img src="imgs/alumnos.png" width="150" height="150">
  				<br>
				<b>Alumnos</b>
  			</a>
  		</div>
  		<div class="cols-sm-12 col-md-3 bg-light">
  			<a href="#">
  				<img src="imgs/solicitudes.png" width="150" height="150">
  				<br>
				<b>Solicitudes</b>
  			</a>
  		</div>
  		<div class="cols-sm-12 col-md-3 bg-light">
  			<a href="#">
  				<img src="imgs/contacto.png" width="150" height="150">
  				<br>
				<b>Contacto empresas</b>
  			</a>
  		</div>
  	</div>
  				
  	
  	</a>
  </div>
  

</body>
</html>