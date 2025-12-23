<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <!-- SE ASIGNAN LOS ICONOS A IMPLEMENTAR -->
    <link rel="icon" href="imgs/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="imgs/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="imgs/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="imgs/favicon-16x16.png">
    <link rel="manifest" href="imgs/site.webmanifest">
    <title>MANAGE_UTN </title>
    <!-- Definicion del tipo de escritura en caracteres -->
    <meta charset="utf-8">
    <!--% Ayuda a hacer responsive %-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--% Lo hace compatible con todos navegadores %-->
    <meta http-equiv="x-ua-compatible" content="ie-edge">
</head>
<body>
    <?php
        session_start();
        $varsesion=$_SESSION['usuario'];
        
        if($_SESSION == null || $varsesion =''){
            echo "<h1>¡Error de credenciales!</h1>";
            echo "<br><br><br>";
            echo "<div id='fondo'>";
            echo "<br><br>";
            echo "<p id='leyenda'>No puedes acceder al sitio de esta forma...</p><br>";
            echo "<center><a id='is' href='Login.php'>Ir a iniciar sesion</a></center>";
            echo "<br><br><br>";
            echo "</div>";
            die();
        }

    ?>
</body>
</html>