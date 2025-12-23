<?php
	print "Mi primer código PHP! :3";

	$numero = 5;
	echo "Esto es un número: $numero";;
	echo "<br><br>";

	$boleana = true;
	echo "boolean be like $boleana";

	#cuando es una variable boolean -> falsa no muestra nada

	#-------------VARIABLES DE ARREGLO---------------
	#                  [0]      [1]        [2]
	$colores = array("roja", "amarilla", "verde");

	echo "Color: $colores[2]";

	#Variables Arreglo con Propiedades
	$Verduras = array("Verdura1"=>"lechuga", "Verdura2"=>"cebolla");
	echo "Variable arreglo con propiedad: $verduras[Verdura1]";
	# -> Es mas comoda de escribir por que se llama por propiedad


	#Variables tipo objeto son...
	$frutas = (object)["fruta1"=>"pera","fruta2"=>"manzana"];
	echo "Esto es una variable objeto: $frutas->fruta1";

	#

?>