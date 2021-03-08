<?php 
	require('conexion.php');
	$json=$_POST['data'];
	$req="INSERT INTO `registros` (`id`, `name`, `cell`, `code`,`type`, `timestamp`) VALUES ('0', '$json[nombre]', '$json[telefono]', '$json[operacion]', '$json[medio]', current_timestamp());";
	$query=mysqli_query($conexion,$req);
	if($query){
		echo "done";
	}
	else{
		print_r($json);
	}
 ?>