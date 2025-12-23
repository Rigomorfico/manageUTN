<?php
	include("conexion.php");
	$getmysql=new mysqlconex();
	$getconex=$getmysql->conex();

	// Resultado al hacer click en el boton
	if (isset($_POST["registrar"])) {
		// Se asignan las variables
		$razon_social		=$_POST["razSoc"];
		$nombre_comercial	=$_POST["nomCom"];
		$giro_empresa		=$_POST["giroEmp"];
		$telefono_empresa	=$_POST["telEmp"];
		$domicilio_empresa	=$_POST["domEmp"];
		$ciudad 			=$_POST["ciudad"];
		$estado 			=$_POST["estado"];
		$nivel 				=$_POST["nivel"];
		$carrera 			=$_POST["carrera"];

		// Inserción de datos
		$query="INSERT INTO empresas_estadias (
			razon_social,
			nombre_comercial,
			giro_empresa,
			telefono_empresa,
			domicilio_empresa,
			ciudad,
			estado,
			nivel,
			carrera
		) VALUES (?,?,?,?,?,?,?,?,?)";

		$sentencia=mysqli_prepare($getconex,$query);
		mysqli_stmt_bind_param($sentencia,"sssssssss",
			$razon_social,
			$nombre_comercial,
			$giro_empresa,
			$telefono_empresa,
			$domicilio_empresa,
			$ciudad,
			$estado,
			$nivel,
			$carrera);

		mysqli_stmt_execute($sentencia);
		$afectado=mysqli_stmt_affected_rows($sentencia);

		if ($afectado==1) {
			// code...
			echo "<script> alert('La empresa [$nombre_comercial] se agrego correctamente ✅'); location.href='../excmysql.php'; </script>";

		}else {
			echo "<script> alert('La empresa [$nombre_comercial] NO se agrego correctamente 😔');
			location.href='../excmysql.php'; </script>";
		}

		mysqli_smt_close($sentencia);
		mysqli_close($getconex);
	}
?>