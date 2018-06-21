<?php
$mysql_host="localhost";
$mysql_usurio="id2551940_inventario";
$mysql_clave="inventario";
$mysql_basededato="id2551940_inventario";

$mysqli= new mysqli($mysql_host,$mysql_usurio,$mysql_clave,$mysql_basededato);
$mysqli -> set_charset("utf8");
	
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida :', mysqli_connect_error();
		exit();
	}

	  $conexion = new mysqli('localhost','id2551940_inventario','inventario','id2551940_inventario',3306);
?>