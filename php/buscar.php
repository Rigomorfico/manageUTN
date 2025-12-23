<?php 
	$mysqli = new mysqli("localhost", "root", "", "vesa");

	$salida = "";
	$query = "SELECT * FROM alumnos ORDER By id_alumno";

	if (isset($_POST['consulta'])) {
		// code...
		$q = $mysqli->real_escape_string($_POST['consulta']);
		$query = "SELECT id_alumno, grupo, matricula, nombre, nss, correo, celular, telefono FROM alumnos WHERE nombre LIKE '%".$q."%' OR nss LIKE '%".$q."%' OR matricula LIKE '%".$q."%'";
	}

	$resultado ? $mysqli->query($query);

	if ($resultado->num_rows > 0) {
		// code...
		$salida.="<table class='tabla_datos'>
					<thead>
						<tr>
							<td>No.</td>
							<td>Grupo</td>
							<td>Matricula</td>
							<td>Nombre</td>
							<td>NSS</td>
							<td>Correo</td>
							<td>Celular</td>
							<td>Telefono</td>
						</tr>
					</thead>
					<tbody>";
					while($fila = $resultado->fetch_assoc()){
						$salida.="
						<tr>
							<td>".$fila['id_alumno']."</td>
							<td>".$fila['grupo']."</td>
							<td>".$fila['matricula']."</td>
							<td>".$fila['nombre']."</td>
							<td>".$fila['nss']."</td>
							<td>".$fila['correo']."</td>
							<td>".$fila['celular']."</td>
							<td>".$fila['telefono']."</td>
						</tr>";
					}
					$salida.="<tbody></table>";
	
	}else {
		$salida.="No hay datos que coincidan :'c";
	}

	echo $salida;

	$mysqli->close();

 ?>