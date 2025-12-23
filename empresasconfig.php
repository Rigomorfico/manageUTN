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
    <link rel="stylesheet" type="text/css" href="css/excmysql.css">
  </head>

  <body>
    <!-- Pantalla de carga
    <div class="cargando">
      <div class="loader-outter"></div>
      <div class="loader-inner"></div>
    </div>  -->
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
      <li class="breadcrumb-item"><a href="excmysql.php">Empresas de estadias</a></li>
      <li class="breadcrumb-item"><a href="#">Configuración empresas</a></li>
    </ol>
  </nav>
  <!-- INICIO DEL CONTENIDO -->
  <br>
  <form actions="" method="get">
    <label>Nombre de la empresa:&nbsp;</label>
    <input type="text" name="busqueda">
    <input type="submit" name="enviar" value="Buscar">
  </form>
  <br>
  <table border="0" class="table table-striped bg-light" width="100%">
    <thead class="" style="background-color: #00C040; color: floralwhite; text-align: center;">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">RAZON SOCIAL</th>
        <th scope="col">NOMBRE EMPRESA</th>
        <th scope="col">GIRO</th>
        <th scope="col">TELEFONO</th>
        <th scope="col">DOMICILIO</th>
        <th scope="col">CIUDAD</th>
        <th scope="col">ESTADO</th>
        <th scope="col">NIVEL</th>
        <th scope="col">CARRERA</th>
        <th colspan="2">
          OPCIONES
        </th>
      </tr>
    </thead>
    <tbody>
  <?php
    include 'php/conexion.php';
    $getmysql = new mysqlconex();
    $getconex=$getmysql->conex();
    /* Se presiona boton */
    if(isset($_GET['enviar'])) {
      $busqueda = $_GET['busqueda'];
      $consulta = $getconex->query("SELECT * FROM empresas_estadias WHERE nombre_comercial LIKE '%$busqueda%'");
      // $resultado=mysqli_query($getconex,$consulta);
      while ($fila=mysqli_fetch_row($consulta)) {
        echo "<tr>";
          echo "<td>".$fila[0]."</td>";
          echo "<td>".$fila[1]."</td>";
          echo "<td>".$fila[2]."</td>";
          echo "<td>".$fila[3]."</td>";
          echo "<td>".$fila[4]."</td>";
          echo "<td>".$fila[5]."</td>";
          echo "<td>".$fila[6]."</td>";
          echo "<td>".$fila[7]."</td>";
          echo "<td>".$fila[8]."</td>";
          echo "<td>".$fila[9]."</td>";
          #Editar por filas de la bd
          echo "<td>
              <form action='php/editar_empresa.php' method='POST'>

                <input type='hidden' name='idEmp'   value='".$fila[0]."'>
                <input type='hidden' name='razSoc'  value='".$fila[1]."'>
                <input type='hidden' name='nomCom'  value='".$fila[2]."'>
                <input type='hidden' name='giroEmp' value='".$fila[3]."'>
                <input type='hidden' name='telEmp'  value='".$fila[4]."'>
                <input type='hidden' name='domEmp'  value='".$fila[5]."'>
                <input type='hidden' name='ciudad'  value='".$fila[6]."'>
                <input type='hidden' name='estado'  value='".$fila[7]."'>
                <input type='hidden' name='nivel'   value='".$fila[8]."'>
                <input type='hidden' name='carrera' value='".$fila[9]."'>

                <input class='submit_inp' alt='Modificar' type='submit' name='editar' value='🖋️'>
              </form>
            </td>";

          #Eliminar por filas de la bd
          echo "<td>
              <form action='php/eliminar_empresa.php' method='POST'>
                <input type='hidden' name='idEmp' value='".$fila[0]."'>
                <input type='hidden' name='nomCom' value='".$fila[2]."'>

                <input class='submit_inp' alt='Eliminar' type='submit' name='eliminar' value='🗑️'>
              </form>
            </td>";
          echo "</tr>";
      }
      mysqli_close($getconex);
    }
  ?>
    </tbody>
  </table>
</body>
</html>