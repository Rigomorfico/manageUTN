<?php
	include("conexion.php");
	$getmysql=new mysqlconex();
	$getconex=$getmysql->conex();

	// Resultado al hacer click en el boton
	if (isset($_POST["registrar"])) {
		// Se asignan las variables
		$nombre=$_POST["nombre"];
		$usu=$_POST["usu"];
		$contra=$_POST["contra"];

		// Inserción de datos
		$query="INSERT INTO personal (responsable,user,pass) VALUES (?,?,?)";
		$sentencia=mysqli_prepare($getconex,$query);
		mysqli_stmt_bind_param($sentencia,"sss",$nombre,$usu,$contra);
		mysqli_stmt_execute($sentencia);

		$afectado=mysqli_stmt_affected_rows($sentencia);

		if ($afectado==1) {
			// code...
			echo "<script> alert('El usuario [$usu] se agrego correctamente'); location.href='../altas.php'; </script>";

		}else {
			echo "<script> alert('El usuario [$usu] NO se agrego correctamente :C'); </script>";
		}

		mysqli_smt_close($sentencia);
		mysqli_close($getconex);
	}
?>