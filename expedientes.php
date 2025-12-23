<?php
    include_once('php/sesion_nula.php')
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    include("php/conexion.php");
    $getmysql = new mysqlconex();
    $getconex=$getmysql->conex();

    $tmp = array();
    $res = array();

    $sel = $getconex->query("SELECT * FROM files");
    while ($row = $sel->fetch_assoc()) {
        $tmp = $row;
        array_push($res, $tmp);
    }
?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <!-- Se llaman estilos propios -->
        <link rel="stylesheet" type="text/css" href="css/expedientes.css">        
        <!-- SE ASIGNAN LOS ICONOS A IMPLEMENTAR -->
        <link rel="icon" href="imgs/favicon.ico">
        <link rel="apple-touch-icon" sizes="180x180" href="imgs/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="imgs/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="imgs/favicon-16x16.png">
        <link rel="manifest" href="imgs/site.webmanifest">
        <title>MANAGE_UTN | Expedientes</title>
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
        <!-- Barra de navegacion / Header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <!-- Logo con texto para pantallas md > xl -->
                <img src="imgs/logo.png" alt="" width="300" height="45" class="d-inline-block align-text-top img-fluid">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 w-100 justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">
                            Inicio
                            
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="altas.php">Altas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="expedientes.php">Expedientes</a>
                        <span class="sr-only">(current)</span>
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
        <li class="breadcrumb-item"><a href="#">Expedientes</a></li>
      </ol>
    </nav>

    <!-- INICIO DE CONTENIDO -->


        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-auto">
                    <h1>Registro de Expedientes</h1>
                </div>
            </div>
            <div class="row justify-content-md-center">
                <div class="col-8 bg-light" style="border-radius: 5px;">
                    <br>
                    <!-- BOTONES -->
                    <center>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Nuevo ➕
                        </button>
                        &nbsp;&nbsp;
                        <button type="button" class="btn btn-primary" data-toggle="#" data-target="#">
                            Eliminar 🆑
                        </button> 
                        &nbsp;&nbsp;
                        <input type="text" class="" id="buscarexp" aria-describedby="Buscar...">
                        <button type="button" class="btn btn-primary" data-toggle="#" data-target="#">
                            Buscar 🔎
                        </button>
                    </center>
                    <br>

                    <table class="table mt-2">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">titulo</th>
                                <th scope="col">descripcion</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($res as $val) { ?>
                                <tr>
                                    <td><?php echo $val['id'] ?> </td>
                                    <td><?php echo $val['title'] ?></td>
                                    <td><?php echo $val['description'] ?></td>
                                    <td>
                                        <button onclick="openModelPDF('<?php echo $val['url'] ?>')" class="btn btn-primary" type="button">Ver PDF 👁️</button>
                                        <a class="btn btn-primary" target="_black" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . '/vinculacion/php/' . $val['url']; ?>" >Abrir PDF ☑</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Nuevo archivo</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form enctype="multipart/form-data" id="form1">
                            <div class="form-group">
                                <label for="title">Titulo</label>
                                <input type="text" class="form-control" id="title" name="title">
                            </div>
                            <div class="form-group">
                                <label for="description">Descripcion</label>
                                <input type="text" class="form-control" id="description" name="description">
                            </div>
                            <div class="form-group">
                                <label for="description">archivo</label>
                                <input type="file" class="form-control" id="file" name="file">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" onclick="onSubmitForm()">Guardar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modalPdf" tabindex="-1" aria-labelledby="modalPdf" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ver archivo</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <iframe id="iframePDF" frameborder="0" scrolling="no" width="100%" height="500px"></iframe>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

                    </div>
                </div>
            </div>
        </div>

        <br><br><br>
        
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

        <script>
                            function onSubmitForm() {
                                var frm = document.getElementById('form1');
                                var data = new FormData(frm);
                                var xhttp = new XMLHttpRequest();
                                xhttp.onreadystatechange = function () {
                                    if (this.readyState == 4) {
                                        var msg = xhttp.responseText;
                                        if (msg == 'success') {
                                            alert(msg);
                                            $('#exampleModal').modal('hide')
                                        } else {
                                            alert(msg);
                                        }

                                    }
                                };
                                xhttp.open("POST", "php/upload.php", true);
                                xhttp.send(data);
                                $('#form1').trigger('reset');
                            }
                            function openModelPDF(url) {
                                $('#modalPdf').modal('show');
                                $('#iframePDF').attr('src','<?php echo 'http://' . $_SERVER['HTTP_HOST'] . '/vinculacion/php/'; ?>'+url);
                            }
        </script>


        <!-- Sección de importación de bootstrap
    <script src="Javascript/jquery-3.5.1.slim.min.js" type="text/javascript"></script>
    <script src="Javascript/popper.min.js"></script>
    <script src="Javascript/bootstrap.min.js"></script>-->

    <!-- ANIMACIONES(AOS) -->
    <script src="aos/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    </body>
</html>