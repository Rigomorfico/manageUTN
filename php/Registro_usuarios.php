<?php
    include("conexion.php");
    $getmysql=new mysqlconex();
    $getconex=$getmysql->conex();

    // Resultado al hacer click en el boton
    if (isset($_POST["registrar"])) {
        // Se asignan las variables
        $nombre=$_POST['nombre'];
        $email=$_POST['email'];
        $usuario=$_POST['usuario'];
        $contrasena=$_POST['contrasena'];
        $rol_id=$_POST['rol_id'];
    }
//INICIA SENTENCIA DE DATOS VACIOS
        if($nombre == '') {
            echo ' 
            <script>
                alert("El campo nombre se encuentra vacio 😔");
            </script>
            ';
        }elseif ($email == '') {
            echo ' 
            <script>
                alert("El campo email se encuentra vacio 😔");
            </script>
            ';
        }elseif ($usuario == ''){
            echo ' 
            <script>
                alert("El campo usuario se encuentra vacio 😔");
            </script>
            ';
        }elseif ($contrasena == '') {
            echo ' 
            <script>
                alert("El campo contraseña se encuentra vacio 😔");
            </script>
            ';
        }elseif ($rol_id == '') {
            echo ' 
            <script>
                alert("El campo rol se encuentra vacio 😔");
            </script>
            ';
        }else{
            $query ="INSERT INTO usuarios (nombre, email, usuario, contrasena, rol_id) 
            values ('$nombre', '$email', '$usuario', '$contrasena',$rol_id)";
        


    $verificacion_email=mysqli_query($getconex, "SELECT * from usuarios WHERE email = '$email' ");
    if(mysqli_num_rows($verificacion_email) > 0){
        echo ' 
            <script>
                alert("El correo ya ha sido registrado con anterioridad, prueba con otra dirección de correo");
                window.location = "../Login.php";
            </script>
        ';
        exit();
    }

    $verificacion_usuario=mysqli_query($getconex, "SELECT * from usuarios WHERE usuario = '$usuario' ");
    if(mysqli_num_rows($verificacion_usuario) > 0){
        echo ' 
            <script>
                alert("Este usuario ya ha sido registrado, intenta probar con otro");
                window.location = "../Login.php";
            </script>
        ';
        exit();
    }
    
    $ejecutar=mysqli_query($getconex, $query);

    

    if($ejecutar){

        echo '
            <script>
                alert("Usuario almacenado de manera exitosa");
                window.location = "../Login.php";
            </script>
        ';

    }else{

        echo '
        <script>
            alert("Vuelve a intentarlo, el usuario no ha sido almacenado");
            window.location = "../Login.php";
        </script>
    ';
    }

    //ACABA SENTENCIA DE DATOS BASIOS
        mysqli_smt_close($sentencia);
        mysqli_close($getconex);
    }
?>