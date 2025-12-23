<?php
require('config.php');
$tipo       = $_FILES['dataEmpresa']['type'];
$tamanio    = $_FILES['dataEmpresa']['size'];
$archivotmp = $_FILES['dataEmpresa']['tmp_name'];
$lineas     = file($archivotmp);

$i = 0;

foreach ($lineas as $linea) {
    $cantidad_registros = count($lineas);
    $cantidad_regist_agregados =  ($cantidad_registros - 1);

    if ($i != 0) {

        $datos = explode(";", $linea);

        $razon_social       = !empty($datos[0])  ? ($datos[0]) : '';
        $nombre_comercial   = !empty($datos[1])  ? ($datos[1]) : '';
        $giro_empresa       = !empty($datos[2])  ? ($datos[2]) : '';
        $telefono_empresa   = !empty($datos[3])  ? ($datos[3]) : '';
        $domicilio_empresa  = !empty($datos[4])  ? ($datos[4]) : '';
        $ciudad             = !empty($datos[5])  ? ($datos[5]) : '';
        $estado             = !empty($datos[6])  ? ($datos[6]) : '';
        $nivel              = !empty($datos[7])  ? ($datos[7]) : '';
        $carrera            = !empty($datos[8])  ? ($datos[8]) : '';
       
    $insertar = "INSERT INTO empresas_estadias( 
        razon_social,
        nombre_comercial,
        giro_empresa,
        telefono_empresa,
        domicilio_empresa,
        ciudad,
        estado,
        nivel,
        carrera
        ) VALUES(
            '$razon_social',
            '$nombre_comercial',
            '$giro_empresa',
            '$telefono_empresa',
            '$domicilio_empresa',
            '$ciudad',
            '$estado',
            '$nivel',
            '$carrera'
        )";

        mysqli_query($con, $insertar);
    }

      echo '<div>'. $i. "). " .$linea.'</div>';
    $i++;
}


  echo '<p style="text-aling:center; color:#333;">Total de Registros: '. $cantidad_regist_agregados .'</p>';

?>

<a href="excmysql.php">Atras</a>