<?php

	# conectare la base de datos
    require("conection/conexion.php");
    
    if(!$con){
        die("imposible conectarse: ".mysqli_error($con));
    }
    if (@mysqli_connect_errno()) {
        die("Connect failed: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }
	/*Inicia validacion del lado del servidor*/
	 if  (empty($_POST['sala'])){
			$errors[] = "sala vacío";
		} else if (empty($_POST['fila'])){
			$errors[] = "fila vacío";
		} else if (empty($_POST['numero'])){
			$errors[] = "numero vacío";
		
		}   else if (
		    
			!empty($_POST['sala']) && 
			!empty($_POST['fila']) &&
                        !empty($_POST['usuario']) &&
			!empty($_POST['numero']) 	
			
			
		){

		// escaping, additionally removing everything that could be (html/javascript-) code
	
		$sala=mysqli_real_escape_string($con,(strip_tags($_POST["sala"],ENT_QUOTES)));
		$fila=mysqli_real_escape_string($con,(strip_tags($_POST["fila"],ENT_QUOTES)));
                $usuario=mysqli_real_escape_string($con,(strip_tags($_POST["usuario"],ENT_QUOTES)));
		$numero=mysqli_real_escape_string($con,(strip_tags($_POST["numero"],ENT_QUOTES)));
		
	

if ($sala == 1) {
 $salas="sala1";


		
		$sql="INSERT INTO rack (
	
		fila,
		sala,
		rack
		
		) VALUES (
		
		'".$fila."',
		'".$sala."',
		'".$numero."')";



		for ($unidad=1; $unidad <=50; $unidad++) { 
	


$sql2= " INSERT INTO sala1 (
	
		 razon_social, tipo_equipo, nombre, marca, modelo, unidad, n_serie,sala, fila, rack, observaciones, posicion,usuario
		
		) VALUES (

		'disponible',
		'disponible',
		'disponible',
		'disponible',
		'disponible',
		'".$unidad."',
		'disponible',
                '".$sala."',
		'".$fila."',
		'".$numero."',
		'disponible',
		'disponible',
                '".$usuario."'
		
		)";

$query_update = mysqli_query($con,$sql2);
   }      
		
		
		$query_update = mysqli_query($con,$sql);
			if ($query_update){
				$messages[] = " Sala 1 Rack =".$fila."".$numero."";
			} else{
				$errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($con);
			}
		}
		





if ($sala == 2) {
 

		
		$sql="INSERT INTO rack (
	
		fila,
		sala,
		rack
		
		) VALUES (
		
		'".$fila."',
		'".$sala."',
		'".$numero."')";



		for ($unidad=1; $unidad <=50; $unidad++) { 
	


$sql2= " INSERT INTO sala2 (
	
		 razon_social, tipo_equipo, nombre, marca, modelo, unidad, n_serie,sala, fila, rack, observaciones, posicion,usuario
		
		) VALUES (

		'disponible',
		'disponible',
		'disponible',
		'disponible',
		'disponible',
		'".$unidad."',
		'disponible',
                '".$sala."',
		'".$fila."',
		'".$numero."',
		'disponible',
		'disponible',
                '".$usuario."'
		
		)";

$query_update = mysqli_query($con,$sql2);
   }      
		
		
		$query_update = mysqli_query($con,$sql);
			if ($query_update){
				$messages[] = " Sala 2 Rack = ".$fila."".$numero."";
			} else{
				$errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($con);
			}
		}
		

if ($sala == 3) {
 

		
		$sql="INSERT INTO rack (
	
		fila,
		sala,
		rack
		
		) VALUES (
		
		'".$fila."',
		'".$sala."',
		'".$numero."')";



		for ($unidad=1; $unidad <=50; $unidad++) { 
	


$sql2= " INSERT INTO sala3 (
	
		 razon_social, tipo_equipo, nombre, marca, modelo, unidad, n_serie,sala, fila, rack, observaciones, posicion,usuario
		
		) VALUES (

		'disponible',
		'disponible',
		'disponible',
		'disponible',
		'disponible',
		'".$unidad."',
		'disponible',
                 '".$sala."',
		'".$fila."',
		'".$numero."',
		'disponible',
		'disponible',
		'".$usuario."'
		)";

$query_update = mysqli_query($con,$sql2);
   }      
		
		
		$query_update = mysqli_query($con,$sql);
			if ($query_update){
				$messages[] = "Sala 3 Rack = ".$fila."".$numero."";
			} else{
				$errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($con);
			}
		}
		


if ($sala == 4) {
 

		
		$sql="INSERT INTO rack (
	
		fila,
		sala,
		rack
		
		) VALUES (
		
		'".$fila."',
		'".$sala."',
		'".$numero."')";



		for ($unidad=1; $unidad <=50; $unidad++) { 
	


$sql2= " INSERT INTO sala4 (
	
		 razon_social, tipo_equipo, nombre, marca, modelo, unidad, n_serie,sala, fila, rack, observaciones, posicion,usuario
		
		) VALUES (

		'disponible',
		'disponible',
		'disponible',
		'disponible',
		'disponible',
		'".$unidad."',
		'disponible',
                '".$sala."',
		'".$fila."',
		'".$numero."',
		'disponible',
		'disponible',
                '".$usuario."'
		)";

$query_update = mysqli_query($con,$sql2);
   }      
		
		
		$query_update = mysqli_query($con,$sql);
			if ($query_update){
				$messages[] = " Sala 4 Rack = ".$fila."".$numero."";
			} else{
				$errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($con);
			}
		}
		






		if ($sala == 5) {
 

		
		$sql="INSERT INTO rack (
	
		fila,
		sala,
		rack
		
		) VALUES (
		
		'".$fila."',
		'".$sala."',
		'".$numero."')";



		for ($unidad=1; $unidad <=50; $unidad++) { 
	


$sql2= " INSERT INTO sala5 (
	
		 razon_social, tipo_equipo, nombre, marca, modelo, unidad, n_serie,sala, fila, rack, observaciones, posicion,usuario
		
		) VALUES (

		'disponible',
		'disponible',
		'disponible',
		'disponible',
		'disponible',
		'".$unidad."',
		'disponible',
                '".$sala."',
		'".$fila."',
		'".$numero."',
		'disponible',
		'disponible',
		'".$usuario."'
		)";

$query_update = mysqli_query($con,$sql2);
   }      
		
		
		$query_update = mysqli_query($con,$sql);
			if ($query_update){
				$messages[] =" Sala 5 Rack = ".$fila."".$numero."";
			} else{
				$errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($con);
			}
		}
		






		if ($sala == 6) {
 

		
		$sql="INSERT INTO rack (
	
		fila,
		sala,
		rack
		
		) VALUES (
		
		'".$fila."',
		'".$sala."',
		'".$numero."')";



		for ($unidad=1; $unidad <=50; $unidad++) { 
	


$sql2= " INSERT INTO sala6 (
	
		 razon_social, tipo_equipo, nombre, marca, modelo, unidad, n_serie, sala,fila, rack, observaciones, posicion,usuario
		
		) VALUES (

		'disponible',
		'disponible',
		'disponible',
		'disponible',
		'disponible',
		'".$unidad."',
		'disponible',
                '".$sala."',
		'".$fila."',
		'".$numero."',
		'disponible',
		'disponible',
		'".$usuario."'
		)";

$query_update = mysqli_query($con,$sql2);
   }      
		
		
		$query_update = mysqli_query($con,$sql);
			if ($query_update){
				$messages[] = " Sala 6 Rack = ".$fila."".$numero."";
			} else{
				$errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($con);
			}
		}
		






		if ($sala == 7) {
 

		
		$sql="INSERT INTO rack (
	
		fila,
		sala,
		rack
		
		) VALUES (
		
		'".$fila."',
		'".$sala."',
		'".$numero."')";



		for ($unidad=1; $unidad <=50; $unidad++) { 
	


$sql2= " INSERT INTO sala7 (
	
		 razon_social, tipo_equipo, nombre, marca, modelo, unidad, n_serie,sala, fila, rack, observaciones, posicion,usuario
		
		) VALUES (

		'disponible',
		'disponible',
		'disponible',
		'disponible',
		'disponible',
		'".$unidad."',
		'disponible',
                '".$sala."',
		'".$fila."',
		'".$numero."',
		'disponible',
		'disponible',
		'".$usuario."'
		)";

$query_update = mysqli_query($con,$sql2);
   }      
		
		
		$query_update = mysqli_query($con,$sql);
			if ($query_update){
				$messages[] = " Sala 7 Rack = ".$fila."".$numero."";
			} else{
				$errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($con);
			}
		}
		






		if ($sala == 8) {
 

		
		$sql="INSERT INTO rack (
	
		fila,
		sala,
		rack
		
		) VALUES (
		
		'".$fila."',
		'".$sala."',
		'".$numero."')";



		for ($unidad=1; $unidad <=50; $unidad++) { 
	


$sql2= " INSERT INTO sala8 (
	
		 razon_social, tipo_equipo, nombre, marca, modelo, unidad, n_serie,sala, fila, rack, observaciones, posicion,usuario
		
		) VALUES (

		'disponible',
		'disponible',
		'disponible',
		'disponible',
		'disponible',
		'".$unidad."',
		'disponible',
                '".$sala."',
		'".$fila."',
		'".$numero."',
		'disponible',
		'disponible',
		'".$usuario."'
		)";

$query_update = mysqli_query($con,$sql2);
   }      
		
		
		$query_update = mysqli_query($con,$sql);
			if ($query_update){
				$messages[] = " Sala 8 Rack = ".$fila."".$numero."";
			} else{
				$errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($con);
			}
		}
		






		



		















		if (isset($errors)){
			
			?>
			<div class="alert alert-danger" role="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Error!</strong> 
					<?php
						foreach ($errors as $error) {
								echo $error;
							}
						?>
			</div>
			<?php
			}
			if (isset($messages)){
				
				?>
				<div class="alert alert-success" role="alert">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>Ultimo dato ingresado</strong>
						<?php
							foreach ($messages as $message) {
									echo $message;
								}
							?>
				</div>
				<?php
			}
}
?>