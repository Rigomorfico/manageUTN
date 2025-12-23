<?php  
	include("conexion.php");
	$getmysql = new mysqlconex();
	$getconext = $getmysql->conex();

	//Le indicamos que se hara al presionar eliminar
	if (isset($_POST["eliminar"])) {
		// Si se da clic al boton se convierte en true ☺
		$id = $_POST["idEmp"];
		$nombre = $_POST["nomCom"];
		//Sentencia mysql a aplicar
		$query = "DELETE FROM empresas_estadias WHERE id=?";
		$sentencia = mysqli_prepare($getconext, $query);
		mysqli_stmt_bind_param($sentencia,"i",$id);
		//Se ejecuta
		mysqli_stmt_execute($sentencia);
		//Se corrobora que se elimino
		$afectado = mysqli_stmt_affected_rows($sentencia);

		if ($afectado==1) {
			//Se envia el mensaje de que se elimino el registro
			echo "<script> alert('[$nombre] se elimino correctamente'); location.href='../empresasconfig.php'; </script>";
		}else {
			//Se informa que no se elimino el registro
			echo "<script> alert ('[$nombre] NO se elimino correctamente :C'); location.href='../empresasconfig.php'; </script>";
		}

	}

?>