<?php
    include_once('php/sesion_nula.php')
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/Crud.css"/>
    <!-- SE ASIGNAN LOS ICONOS A IMPLEMENTAR -->
    <link rel="icon" href="imgs/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="imgs/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="imgs/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="imgs/favicon-16x16.png">
    <link rel="manifest" href="imgs/site.webmanifest">
    <title>Panel de administrador</title>
    
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    
    <!-- SE ASIGNAN LOS ICONOS A IMPLEMENTAR -->
    <link rel="icon" href="imgs/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="imgs/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="imgs/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="imgs/favicon-16x16.png">
    <link rel="manifest" href="imgs/site.webmanifest">
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><a href="./PanelAdmin.php" class="text-success"><i
                     class="fa-solid fa-user-gear me-2"></i>UTNADMIN</a></div>
            <div class="list-group list-group-flush my-3">
                <a href="./Movilidad.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fa-solid fa-plane me-2"></i>Movilidad</a>
                <a href="./Bolsa_trabajo.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fa-solid fa-briefcase me-2"></i>Bolsa de Trabajo</a>
                <a href="./Seguimiento_Egresado.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fa-solid fa-user-graduate me-2"></i>Seguimiento de Egresado</a>
                <a href="./Estadias.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fa-solid fa-network-wired me-2"></i>Estadías</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fa-solid fa-building me-2"></i>Sector Productivo</a>
                <a href="php/CerrarSesion.php" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                        class="fas fa-power-off me-2"></i>Cerrar Sesión</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Dashboard</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="./Login.php" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i>Secretaria de Vinculación
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="./Login.php">Cerrar Sesión</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid px-4">


                <div class="row my-5">
                    <h3 class="fs-4 mb-3">Registros
                        <br><a href="" class="btn btn-success me-2"><i class="fa-solid fa-file-pdf"></i>Subir</a>
                    </h3> 
                    <div class="col">
                        <table class="table bg-white rounded shadow-sm  table-hover">
                            <thead class="bg-success">
                                <tr>
                                    <th scope="col" width="50">#</th>
                                    <th scope="col">Titulo</th>
                                    <th scope="col">Descripción</th>
                                    <th scope="col">Archivo</th>
                                    <th scope="col">Opciones</th>
                                </tr> 
                            </thead>
                            <tbody>
                                <?php
                                include_once("php/conexion.php");
                                $sql="SELECT * FROM documento";
                                $query=mysqli_query($conn,$sql);
                                while($row = mysqli_fetch_array($query)){ ?>

                                    <tr>
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo $row['titulo']; ?></td>
                                        <td><?php echo $row['descripcion']; ?></td>
                                        <td><?php echo $row['archivo']; ?></td>

                                        <td>
                                            <a href="" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                            <a href="" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                                            <a href="" class="btn btn-small btn-info"><i class="fa-solid fa-eye"></i></a>
                                            
                                        </td>
                                    </tr>

                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Clase /#page-content-wrapper -->
    </div>

    <script href="js/bootstrap.min.js"></script>
    
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
</body>

</html>