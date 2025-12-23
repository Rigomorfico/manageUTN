<?php
    include_once('php/sesion_nula.php')
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<!-- SE ASIGNAN LOS ICONOS A IMPLEMENTAR -->
	<link rel="icon" href="imgs/favicon.ico">
	<link rel="apple-touch-icon" sizes="180x180" href="imgs/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="imgs/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="imgs/favicon-16x16.png">
	<link rel="manifest" href="imgs/site.webmanifest">
	<title>MANAGE_UTN | Inicio</title>
	<!-- Definicion del tipo de escritura en caracteres -->
	<meta charset="utf-8">
	<!-- Descripcion del sitio -->
	<meta name="description" content="Sitio web Administrativo de Vinculación Empresarial en la Universidad Tecnologica de Nayarit">
	<!-- Palabras clave (busquedas) -->
	<meta name="keywords" content="Administrativo, Expediente, Gestion de convenios, Departamentos, Proyectos">
	<!--% Ayuda a hacer responsive %-->
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
	<nav class="bg-secondary sticky-top mx-auto">
    <a href="index.php">
    	<!-- Logo con texto para pantallas md > xl -->
    	<center>
    		<img src="imgs/logo.png" alt="Logo empresarial" width="300" height="45" class="img-fluid">
    	</center>
    </a>
	</nav>
	<!-- INSERTANDO BREADCRUMS -->
	<nav aria-label="breadcrumb">
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
	  </ol>
	</nav>


	<!-- INICIO DEL CONTENIDO -->
	<div class="row mx-auto" style="width: 100%;">
  	<div class="col-sm-12 col-md-6 col-lg-3 mb-3">
	    <div class="card">
	    	<a href="PanelAdmin.php" class="card-a">
		      <img src="imgs/jefatura.jpg" class="card-img-top img-fluid card-img" alt="Sección Jefatura" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="3000">
		      <div class="card-body">
		        <h5 class="card-title card-h5">JEFATURA</h5>
		        <p class="card-text card-p d-none d-md-block">Acceso a personal autorizado para opciones de administración tiene acceso a todos los elementos del sistema y recibe informes.</p>
		      </div>
	    	</a>
	    </div>
  	</div>

  	<div class="col-sm-12 col-md-6 col-lg-3 mb-3">
	    <div class="card">
	    <a href="sesionmovilidad.php" class="card-a">
	      <img src="imgs/pb2.jpg" class="card-img-top card-img" alt="Departamento de estadias" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="3000">
	      <div class="card-body">
	        <h5 class="card-title card-h5">MOVILIDAD</h5>
	        <p class="card-text card-p d-none d-md-block">Se dedica a localizar y dar seguimiento a los alumnos que se encuentran en algun proceso que les impide mantenerse en su localidad.</p>
	      </div>
	    </a>
	    </div>
  	</div>
  
  	<div class="col-sm-12 col-md-6 col-lg-3 mb-3">
	    <div class="card ">
	    	<a href="estadias.php" class="card-a">
		      <img src="imgs/pb3.jpg" class="card-img-top card-img" alt="Sección Estadias" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="3000">
		      <div class="card-body">
		        <h5 class="card-title card-h5">ESTADIAS</h5>
		        <p class="card-text card-p d-none d-md-block">Seguimiento de estadias y recopilación de información de los alumnos para el correcto seguimiento de este proceso.</p>
		      </div>
	    	</a>
	    </div>
  	</div>

  	<div class="col-sm-12 col-md-6 col-lg-3 mb-3">
	    <div class="card">
	    	<a href="directorio.php" class="card-a">
		      <img src="imgs/directorio.jpg" class="card-img-top card-img" alt="Acceder al directorio" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="3000">
		      <div class="card-body">
		        <h5 class="card-title card-h5">DIRECTORIO</h5>
		        <p class="card-text d-none d-md-block card-p">Consultar los contactos afiliados con la Universidad Tenologica de Nayarit a partir de la Secretaría de Vinculación Empresarial.</p>
		      </div>
	      </a>
	    </div>
	  </div>
	</div>

	<!-- SEGUNDA FILA DE LARGE CARDS -->
	<div class="row mx-auto" style="width: 100%;">
		<div class="col-sm-12 col-md-6 col-lg-3 mb-3">
	    <div class="card">
	    	<a href="bolsatrabajo.php" class="card-a">
	      <img src="imgs/pb1.jpg" class="card-img-top img-fluid card-img" alt="Bolsa de trabajo" data-aos="flip-right" data-aos-easing="ease-out-cubic" data-aos-duration="3000">
	      <div class="card-body">
	        <h5 class="card-title card-h5">BOLSA DE TRABAJO</h5>
	        <p class="card-text d-none d-md-block card-p">Departamento perteneciente a Vinculación Empresarial que tiene como objetivo ofrecer oportunidades laborales a la medida de los alumnos egresados de la Universidad Tecnológica de Nayarit.</p>
	      </a>
	      </div>
	   </div>
  </div>

  <div class="col-sm-12 col-md-6 col-lg-3 mb-3">
    <div class="card">
    	<a href="convdelfin.php" class="card-a">
      <img src="imgs/delfin.jpg" class="card-img-top card-img" alt="Departamento de estadias" data-aos="flip-right" data-aos-easing="ease-out-cubic" data-aos-duration="3000">
      <div class="card-body">
        <h5 class="card-title card-h5">CONVOCATORIA DELFIN</h5>
        <p class="card-text d-none d-md-block card-p">Seguimiento de este Programa de movilidad estudiantil, hecho para la ciencia y tecnología. Que permite a los jovenes de la Universidad formar parte de programas de posgrado en el país y en el extranjero.</p>
      </a>
      </div>
    </div>
  </div>

  <div class="col-sm-12 col-md-6 col-lg-3 mb-3">
    <div class="card">
    	<a href="incubadorautn" class="card-a">
      <img src="imgs/incubadorautn.jpg" class="card-img-top card-img" alt="Ver incubadora de negocios" data-aos="flip-right" data-aos-easing="ease-out-cubic" data-aos-duration="3000">
      <div class="card-body">
        <h5 class="card-title card-h5">INCUBADORA DE NEGOCIOS</h5>
        <p class="card-text d-none d-md-block card-p">Visita la incubadora de negocios en la Universidad Tecnologica de Nayarit ubicada en el edificio de Vinculación Empresarial, trae ya tu idea y concreta tu proyecto.</p>
      </a>
      </div>
    </div>
 </div>

  <div class="col-sm-12 col-md-6 col-lg-3 mb-3">
    <div class="card">
    	<a href="visyconf.php" class="card-a">
      <img src="imgs/visyconf.jpg" class="card-img-top card-img" alt="Agenda de Visitas y Conferencias en el Auditorio" data-aos="flip-right" data-aos-easing="ease-out-cubic" data-aos-duration="3000">
      <div class="card-body">
        <h5 class="card-title card-h5">VISITAS Y CONFERENCIAS</h5>
        <p class="card-text d-none d-md-block card-p">Acceder a la agenda de eventos planeados para el audiotorio ubicado en el edificio de Vinculación Empresarial en la Universidad Tecnologica de Nayarit.</p>
      </a>
      </div>
    </div>
  </div>
</div>

<br>
<center>
	<div class="container-fluid row">
		<div class="d-block d-md-none col">
			<img src="imgs/icono.png" width="150" height="150" data-aos="fade-left" data-aos-duration="2000">
		</div>
		<div class="col-12 col-md-6 col-lg-8 text-center my-auto mx-auto bienvenida">
			<b style="display: block; padding: 5px; background-color: white; border-radius: 5px;">PROYECTO MANAGE UTN</b>
			<p class="text-justify" data-aos="fade-up" data-aos-duration="2000" style="font-size: 18px; font-family: Verdana;">
				El portal administrativo MANAGE_UTN desarrollado para el área de vinculación empresarial dentro de la
				Universidad Tecnologica de Nayarit, es un proyecto que tiene como objetivo dotar al personal de
				dicha área una herramienta donde puedan introducir toda la información que se recaba dentro de
				los diferentes departamentos que la conforman, lo que permitira gestionarla, mantenerla accesible, de manera más sencilla y clara. Evitando así malentendidos entre el personal, ahorrando el tiempo de las busquedas y evitando la desinformación en los encargados.
			</p><br>
		</div>
		<div class="d-none d-md-block col-md-6 col-lg-4 my-auto mx-auto img-fluid">
			<img src="imgs/icono.png" width="250" height="250" data-aos="fade-left" data-aos-duration="2000">
		</div>
	</div>
</center>
<br>

<h1>Antecedentes de la Universidad Tecnologíca de Nayarit</h1>
<!-- MISION Y VISION -->
	<div id="MV" data-aos="fade-up" data-aos-duration="2000">
        <b class="bFont">Mision:</b><br>
          <p class="pFont">
              Formar profesionistas competitivos mediante programas de educación superior científicos y tecnológicos, sustentados en un modelo integral y humanista, con un enfoque basado en competencias profesionales y con un sentido de innovación para el desarrollo sustentable del entorno.

              Vincular la institución con los sectores público, social y privado para fortalecer los programas educativos y contribuir con el desarrollo de servicios especializados, asistencia técnica y transferencia de tecnología, a través de la investigación aplicada para impulsar el desarrollo de la región.
          </p><br>

        <b class="bFont">Vision:</b><br>
          <p class="pFont">
              La Universidad Tecnológica de Nayarit es una institución líder en servicios educativos tecnológicos, con programas pertinentes e innovadores reconocidos por su buena calidad, una planta docente calificada, cuerpos académicos consolidados, egresados competitivos y una vinculación estratégica global para contribuir al desarrollo estatal nacional.
          </p><br>
         <b class="bFont">Politica de calidad:</b><br>
          <p class="pFont">
              En la Universidad Tecnológica de Nayarit estamos comprometidos en mejorar e innovar nuestro Sistema Integral de Calidad bajo la norma ISO 21001:2018, orientado a brindar servicios educativos de calidad, mediante un modelo pertinente de formación integral, incorporando funciones sustantivas de investigación, extensión universitaria, vinculación con el sector productivo y social que impacte en el entorno.
          </p><br>
  </div>
  <br>
  <div class="container-fluid col-12 text-center">
		<img src="imgs/UT.jpg" class="img-fluid w-100">
	</div>

	<br><br>
		
				</div>
			</div>


	<!-- Sección de importación de bootstrap -->
	<script src="js/jquery-3.5.1.slim.min.js" type="text/javascript"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

	<!-- ANIMACIONES(AOS) -->
	<script src="aos/dist/aos.js"></script>
	<script>
  		AOS.init();
	</script>

	</body>
</html>