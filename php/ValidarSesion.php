<?php
$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];
session_start();
$_SESSION['usuario']=$usuario;

$conn= mysqli_connect("localhost", "root", "","vesa");

$consulta="SELECT*FROM usuarios WHERE usuario='$usuario' AND contrasena='$contrasena'";
$result=mysqli_query($conn, $consulta);

$filas=mysqli_fetch_array($result);
    if ($usuario!='' && $contrasena !='') {

            if($filas['rol_id']==1){ //Administrador
            header("location:../index.php");
            //header("location:../PanelAdmin.php");
            }else
            if($filas['rol_id']==2){ //Estadía
                header("location:../Estadias.php");
            }else
            if($filas['rol_id']==3){ //Movilidad
                header("location:../Movilidad.php");
            }else
            if($filas['rol_id']==4){ //Bolsa de trabajo
                header("location:../Bolsa_trabajo.php");
            }else
            if($filas['rol_id']==5){ //Seguimiento de egresados
                header("location:../Seguimiento_Egresado.php");
            }else{
                echo ' 
                <script>
                    alert("El usuario y/o contraseña son incorrectos 😔");
                    window.location = "../Login.php";
                </script>
                ';
            }
        
    }elseif ($usuario=='') {
        // code...
         echo ' 
        <script>
            alert("Por favor rellene el campo usuario");
            window.location = "../Login.php";
        </script>
        ';
    }elseif ($contrasena=='') {
        // code...
        echo ' 
        <script>
            alert("Por favor rellene el campo contraseña 👇");
            window.location = "../Login.php";
        </script>
        ';
    }

mysqli_free_result($result);
mysqli_close($conn);
?>