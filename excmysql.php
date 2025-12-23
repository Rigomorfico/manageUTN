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
    <!-- Pantalla de carga-->
    <div class="cargando">
      <div class="loader-outter"></div>
      <div class="loader-inner"></div>
    </div> 
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
      <li class="breadcrumb-item"><a href="#">Empresas de estadias</a></li>
    </ol>
  </nav>


  <!-- INICIO DEL CONTENIDO -->
  <br>
  <h1>EMPRESAS DE ESTADIAS</h1>
  <p>
    Dentro de esta sección se muestra todas las empresas registradas para el proceso de estadias disponibles para los alumnos pertenecientes a la Universidad Tecnologica de Nayarit, costa con una sección de subida que nos permite actualizar los registros de estas a partir de archivos CSV procedientes de excel y otra sección de busqueda donde se puede corroborar sí realmente esta una o más empresas en especifico.
  </p>
  <!-- DAR DE ALTA EMPRESA MANUALMENTE -->
    <h1>REGISTRAR NUEVA EMPRESA</h1>
    <div class="bg-light text-center" style="margin-left:10%; margin-right:10%;">
    <form action="php/insertar_empresa.php" method="POST">
      <br>
      <div class="form-group">
        <label for="razSoc">Razón Social: </label>
        &nbsp;&nbsp;
        <input class="dt" type="text" name="razSoc" id="razSoc">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <label for="nomCom">Nombre Comercial: </label> 
        &nbsp;&nbsp;
        <input class="dt" type="text" name="nomCom" id="nomCom">
      </div>

      <div class="form-group">
        <label for="giroEmp">Giro de la empresa: </label> 
        &nbsp;&nbsp;
        <input class="dt" type="text" name="giroEmp" id="giroEmp">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <label for="telEmp">Telefono empresa: </label>
        &nbsp;&nbsp;
        <input class="dt" type="text" name="telEmp" id="telEmp">
      </div>

      <div class="form-group">
        <label for="domEmp">Domicilio empresa: </label>
        &nbsp;&nbsp;
        <input class="dt" type="text" name="domEmp" id="domEmp">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <label for="ciudad">Ciudad: </label>
        &nbsp;&nbsp;
        <input class="dt" type="text" name="ciudad" id="ciudad">
        &nbsp;&nbsp;
        <label for="estado">Estado: </label>
        &nbsp;&nbsp;
        <input class="dt" type="text" name="estado" id="estado">
        
      </div>

      <div class="form-group">
        <label for="nivel">Nivel: </label>
        &nbsp;&nbsp;
        <input class="dt" type="text" name="nivel" id="nivel">
        <label for="nombre">Carrera: </label>
        &nbsp;&nbsp;
        <input class="dt" type="text" name="carrera" id="carrera">
      </div>

      <div class="" style="width: 100%; text-align: center;">
        <input class="bp" type="submit" name="registrar" value="registrar">
      </div>
      
    </form>
  </div>

  <!-- MINI MENU -->
  <a href="empresasconfig.php?busqueda=&enviar=Buscar" id="ir_busqueda" class="text-center">
    BUSCAR EMPRESAS 🔎
  </a>
  <a class="btn btn-primary" data-toggle="collapse" href="#btnCSV" role="button" aria-expanded="false" aria-controls="btnCSV">
    CONSUMIR ARCHIVO CSV 📄
  </a>
  <div class="collapse" id="btnCSV">
  <div class="card card-body">
  <!-- SECCION PARA CONSUMIR CSV -->
      <form action="recibeEmpresas.php" method="POST" enctype="multipart/form-data"/>
            <!--SE SELECCIONA NUESTRO ARCHIVO-->
            <input  type="file" name="dataEmpresa" id="file-input" class="file-input__input"/>
            <label class="file-input__label" for="file-input">
              <i class="zmdi zmdi-upload zmdi-hc-2x"></i>
              <span>Elegir Archivo CSV 📂</span>
            </label>
            <!--BUTON QUE ENVIA NUESTRO ARCHIVO-->
            <input type="submit" name="subir" class="btn-enviar bg-primary" value="Subir Archivo 📤"/>
      </form>
  </div>
</div>

  <br>
  <div class="sp"></div>
  <br>

  <!-- SE MUESTRAN LOS REGISTROS CON LA OPCION CRUD-->
  <h1>EMPRESAS REGISTRADAS</h1>
  <table border="0" class="table table-striped bg-light">
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
      <tr>
    </thead>

    <tbody>
<?php
  include 'php/conexion.php';
  $getmysql = new mysqlconex();
  $getconex=$getmysql->conex();

  $consulta="SELECT * FROM empresas_estadias";
  $resultado=mysqli_query($getconex,$consulta);

    while($fila=mysqli_fetch_row($resultado)){
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
?>
</tbody>
  </table>
  <br>
  <a href="#inicio ancla">
  <div class="bg-light text-center">
    VOLVER AL PRINCIPIO
  </div>
  </a>
  <br><br>
<!--AQUI VA CODIGO TABLA EMPRESAS -->


</div>

<style type="text/css">
  .submit_inp{
    display: block;
    border-color: #00C040;
    border-width: 1px;
    border-radius: 5px;
    background-color: floralwhite;
  }

  .submit_inp:hover {
    background-color: #D3D3D3;
  }
</style>

<!-- Sección de importación de bootstrap -->
  <script src="Javascript/jquery-3.5.1.slim.min.js" type="text/javascript"></script>
  <script src="Javascript/popper.min.js"></script>
  <script src="Javascript/bootstrap.min.js"></script>
  
<script src="js/jquery.min.js"></script>
<script src="'js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $(window).load(function() {
            $(".cargando").fadeOut(1000);
        });      
});
</script>

</body>
</html>