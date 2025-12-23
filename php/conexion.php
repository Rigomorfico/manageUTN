<?php
	class mysqlconex{
		public function conex() {
			$enlace=mysqli_connect("localhost","root","","vesa");
			return $enlace;
		}
	}

	$conn=new mysqli("localhost", "root", "","vesa");

	function file_name($string) {

	    // Tranformamos todo a minusculas

	    $string = strtolower($string);

	    //Rememplazamos caracteres especiales latinos

	    $find = array('á', 'é', 'í', 'ó', 'ú', 'ñ');

	    $repl = array('a', 'e', 'i', 'o', 'u', 'n');

	    $string = str_replace($find, $repl, $string);

	    // Añadimos los guiones

	    $find = array(' ', '&', '\r\n', '\n', '+');
	    $string = str_replace($find, '-', $string);

	    // Eliminamos y Reemplazamos otros carácteres especiales

	    $find = array('/[^a-z0-9\-<>]/', '/[\-]+/', '/<[^>]*>/');

	    $repl = array('', '-', '');

	    $string = preg_replace($find, $repl, $string);

	    return $string;
	}

	/*#Declarar las variables de conexion
	$server = "localhost";
	$user = "root";
	$password = "";
	$db = "vinculacion";
	#comando mysql
	$conecta = mysqli_connect($server, $user, $password, $db);
	if ($conecta->connect_error) {
		// code...
		die("Error al conectar la base de datos".$conecta->connect_error);
	}*/
?>