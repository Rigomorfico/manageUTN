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

    <title>Directorio</title>

    <!-- IMPORTACION BOOTSTRAP -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- ESTILOS PROPIOS -->
    <link rel="stylesheet" type="text/css" href="Estilos/index.css">
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
      <li class="breadcrumb-item"><a href="estadias.php">Directorio</a></li>
    </ol>
  </nav>
  <!-- INICIO DEL CONTENIDO -->
  <br>

  
</body>
</html>