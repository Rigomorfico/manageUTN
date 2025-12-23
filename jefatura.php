<?php
    include_once('php/sesion_nula.php')
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/sesiones.css">
	<!-- SE ASIGNAN LOS ICONOS A IMPLEMENTAR -->
	<link rel="icon" href="imgs/favicon.ico">
	<link rel="apple-touch-icon" sizes="180x180" href="imgs/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="imgs/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="imgs/favicon-16x16.png">
	<link rel="manifest" href="imgs/site.webmanifest">
	<title>Jefatura</title>
	<!-- Definicion del tipo de escritura en caracteres -->
	<meta charset="utf-8">
	<!-- Descripcion del sitio -->
	<meta name="description" content="Sitio web Administrativo de Vinculación Empresarial en la Universidad Tecnologica de Nayarit">
	<!-- Palabras clave (busquedas) -->
	<meta name="keywords" content="Administrativo, Expediente, Gestion de convenios, Departamentos, Proyectos">
	<!--% Ayuda ahacer responsive %-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--% Lo hace compatible con todos navegadores %-->
	<meta http-equiv="x-ua-compatible" content="ie-edge">
	<!-- Importacion de la biblioteca de animaciones AOS-->
	<link href="aos/dist/aos.css" rel="stylesheet"> 
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
        			<!-- <li class="nav-item">
          				<a class="nav-link" href="importar.php">Importar</a>
        			</li> -->
      			</ul>
    			</div>
    		</div>
  		</div>
	</nav>
	<!-- INSERTANDO BREADCRUMS -->
	<nav aria-label="breadcrumb">
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
	    <li class="breadcrumb-item"><a href="#">Jefatura</a></li>
	  </ol>
	</nav>


	<!-- INICIO DEL CONTENIDO -->
	<h1>Panel de control ('Usuario')</h1>
	<!-- SECCION DE BANNERS ANIMADOS -->
	<!-- BANNER 1 -->
	<div class="container-fluid bg-light base">
		<div class="cb1 col-6">
			<img src="imgs/pb2.jpg" width="250" height="250" class="img-fluid"
				data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="3000">
		</div>
		<div class="cb2 mx-auto my-auto text-left">
			<h4 data-aos="fade-down" data-aos-offset="200" data-aos-easing="ease-in-sine" data-aos-duration="1000">
				MOVILIDAD
			</h4>
		</div>
	</div>
	<br>
	<!-- BANNER 2 -->
	<div class="container-fluid bg-light base">
		<div class="cb2 mx-auto my-auto text-left">
			<h4 data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1000">
 				ESTADIAS
 			</h4>
		</div>
		<div class="cb1 col-6">
				<img src="imgs/pb1.jpg" width="250" height="250" class="img-fluid"
					data-aos="flip-right" data-aos-easing="ease-out-cubic" data-aos-duration="3000">
		</div>
	</div>
	<br>

		<!-- BANNER 2 -->
		<div class="container-fluid bg-light col-6 base">
			<div class="cb1">
				<img src="imgs/pb2.jpg" width="250" height="250" class="img-fluid"
				data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="3000">
			</div>
			<div class="cb2 mx-auto my-auto text-left">
				<h4 data-aos="fade-down" data-aos-offset="200" data-aos-easing="ease-in-sine" data-aos-duration="1000">
					BOLSA DE TRABAJO
				</h4>
			</div>
		</div>
		<br>
		<!-- BANNER 3 -->
		<div class="container-fluid bg-light col-6 base">
			<div class="cb2 mx-auto my-auto text-left">
				<h4 data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1000">
					CONVOCATORIA DELFIN
				</h4>
			</div>
			<div class="cb1 col-6">
				<img src="imgs/pb3.jpg" width="250" height="250" class="img-fluid"
				data-aos="flip-right" data-aos-easing="ease-out-cubic" data-aos-duration="3000">
			</div>
		</div>
		<br>
		<!-- BANNER 5 -->
		<div class="container-fluid bg-light base">
			<div class="cb1 col-6">
				<img src="imgs/pb2.jpg" width="250" height="250" class="img-fluid"
				data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="3000">
			</div>
			<div class="cb2 mx-auto my-auto text-left">
				<h4 data-aos="fade-down" data-aos-offset="200" data-aos-easing="ease-in-sine" data-aos-duration="1000">
					INCUBADORA DE NEGOCIOS
				</h4>
			</div>
		</div>
		
		<br><br><br><br><br>
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