<?php
$host="localhost";
$usuario="root";
$contraseña="";
$base="inventario_base";

$conexion= new mysqli($host, $usuario, $contraseña, $base);
if ($conexion -> connect_errno)
{
	die("Fallo la conexion:(".$conexion -> mysqli_connect_errno().")".$conexion-> mysqli_connect_error());
}



	// NOMBRE DEL ARCHIVO Y CHARSET
	header('Content-Type:text/csv; charset=latin1');
	header('Content-Disposition: attachment; filename="Reporte_sala2.csv"');

	// SALIDA DEL ARCHIVO
	$salida=fopen('php://output', 'w');
	// ENCABEZADOS
	fputcsv($salida, array('Razon Social', 'Tipo de Maquina', 'Nombre', 'Marca', 'Modelo','Numero de Serie','Fila','Rack','Observaciones','Posicion'));
	// QUERY PARA CREAR EL REPORTE
	

$reporteCsv=$conexion->query("SELECT *  FROM sala2  ORDER BY rack");
	while($filaR= $reporteCsv->fetch_assoc())
		fputcsv($salida, array($filaR['razon_social'], 
								$filaR['tipo_equipo'],
								$filaR['nombre'],
								$filaR['marca'],
								$filaR['modelo'],
								$filaR['n_serie'],
								$filaR['fila'],
								$filaR['rack'],
								$filaR['observaciones'],
								$filaR['posicion']));

?>