<?php  
	include("conexion.php");
	$getmysql = new mysqlconex();
	$getconext = $getmysql->conex();

	//Le indicamos que se hara al presionar eliminar
	if (isset($_POST["eliminar"])) {
		// Si se da clic al boton se convierte en true ☺
		$id = $_POST["id"];
		$nombre = $_POST["nombre"];
		//Sentencia mysql a aplicar
		$query = "DELETE FROM personal WHERE id=?";
		$sentencia = mysqli_prepare($getconext, $query);
		mysqli_stmt_bind_param($sentencia,"i",$id);
		//Se ejecuta
		mysqli_stmt_execute($sentencia);
		//Se corrobora que se elimino
		$afectado = mysqli_stmt_affected_rows($sentencia);

		if ($afectado==1) {
			// code...
			echo "<script> alert('El usuario [$nombre] se elimino correctamente'); location.href='../altas.php'; </script>";
		}else {
			echo "<script> alert ('El usuario [$nombre] NO se elimino correctamente :C'); </script>";
		}

	}

?>