<?php
require 'conexion.php';


$nombre= $_POST['nombre'];
$nombre= $_POST['email'];
$nombre= $_POST['telefono'];
$nombre= $_POST['estado_civil'];
$hijos = isset($_POST['hijo']) ? $_POST['hijos'] : 0;
$hijos = isset($_POST['hijo']) ? $_POST['hijos'] : null;

$arrayIntereses = null;

$num_array = count($arrayIntereses);


$num_array = count($intereses);
	$contador = 0;
	
	if($num_array>0){
		foreach ($intereses as $key => $value) {
			if ($contador != $num_array-1)
			$arrayIntereses .= $value.' ';
			else
			$arrayIntereses .= $value;
			$contador++;
		}
	}
	
	$sql = "INSERT INTO personas (nombre, correo, telefono, estado_civil, hijos, intereses) VALUES ('$nombre', '$email', '$telefono', '$estado_civil', '$hijos', '$arrayIntereses')";
	$resultado = $mysqli->query($sql);
	$id_insert = $mysqli->insert_id;
	

?>