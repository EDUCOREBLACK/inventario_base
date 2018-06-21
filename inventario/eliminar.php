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
			!empty($_POST['numero']) 	
			
			
		){

		// escaping, additionally removing everything that could be (html/javascript-) code
	
		$sala=mysqli_real_escape_string($con,(strip_tags($_POST["sala"],ENT_QUOTES)));
		$fila=mysqli_real_escape_string($con,(strip_tags($_POST["fila"],ENT_QUOTES)));
		$numero=mysqli_real_escape_string($con,(strip_tags($_POST["numero"],ENT_QUOTES)));
		
	

if ($sala == 1) {

$sql=" DELETE  From rack Where fila='$fila' AND rack = '$numero' and sala='$sala'";
		
	
	
$sql1 = "INSERT INTO papelera SELECT * FROM sala1 where fila='$fila' AND rack = '$numero'";


$sql2 = "DELETE FROM sala1 WHERE fila='$fila' AND rack = '$numero'";

	


	     
			$query_update = mysqli_query($con,$sql);
			$query_update = mysqli_query($con,$sql1);
		$query_update = mysqli_query($con,$sql2);
			if ($query_update){
				$messages[] = "Sala 1  Rack=$fila$numero";
			} else{
				$errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($con);
			}
		}
		



if ($sala == 2) {
 
$sql=" DELETE  From rack Where fila='$fila' AND rack = '$numero' and sala='$sala'";
		
	
	
$sql1 = "INSERT INTO papelera SELECT * FROM sala2 where fila='$fila' AND rack = '$numero'";


$sql2 = "DELETE FROM sala2 WHERE fila='$fila' AND rack = '$numero'";

	


	     
			$query_update = mysqli_query($con,$sql);
			$query_update = mysqli_query($con,$sql1);
		$query_update = mysqli_query($con,$sql2);
			if ($query_update){
				$messages[] = "Sala 2  Rack=$fila$numero";
			} else{
				$errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($con);
			}
		}
		
		

if ($sala == 3) {
$sql=" DELETE  From rack Where fila='$fila' AND rack = '$numero' and sala='$sala'";
		
	
	
$sql1 = "INSERT INTO papelera SELECT * FROM sala3 where fila='$fila' AND rack = '$numero'";


$sql2 = "DELETE FROM sala3 WHERE fila='$fila' AND rack = '$numero'";

	


	     
			$query_update = mysqli_query($con,$sql);
			$query_update = mysqli_query($con,$sql1);
		$query_update = mysqli_query($con,$sql2);
			if ($query_update){
				$messages[] = "Sala 3  Rack= $fila$numero";
			} else{
				$errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($con);
			}
		}
		
		


if ($sala == 4) {
 
$sql=" DELETE  From rack Where fila='$fila' AND rack = '$numero' and sala='$sala'";
		
	
	
$sql1 = "INSERT INTO papelera SELECT * FROM sala4 where fila='$fila' AND rack = '$numero'";


$sql2 = "DELETE FROM sala4 WHERE fila='$fila' AND rack = '$numero'";

	


	     
			$query_update = mysqli_query($con,$sql);
			$query_update = mysqli_query($con,$sql1);
		$query_update = mysqli_query($con,$sql2);
			if ($query_update){
				$messages[] = "Sala 4  Rack=$fila$numero";
			} else{
				$errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($con);
			}
		}
		





		if ($sala == 5) {
 

		
$sql=" DELETE  From rack Where fila='$fila' AND rack = '$numero' and sala='$sala'";
		
	
	
$sql1 = "INSERT INTO papelera SELECT * FROM sala5 where fila='$fila' AND rack = '$numero'";


$sql2 = "DELETE FROM sala5 WHERE fila='$fila' AND rack = '$numero'";

	


	     
			$query_update = mysqli_query($con,$sql);
			$query_update = mysqli_query($con,$sql1);
		$query_update = mysqli_query($con,$sql2);
			if ($query_update){
				$messages[] ="Sala 5  Rack=$fila$numero";
			} else{
				$errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($con);
			}
		}
		






		if ($sala == 6) {
 

		
$sql=" DELETE  From rack Where fila='$fila' AND rack = '$numero' and sala='$sala'";
		
	
	
$sql1 = "INSERT INTO papelera SELECT * FROM sala6 where fila='$fila' AND rack = '$numero'";


$sql2 = "DELETE FROM sala6 WHERE fila='$fila' AND rack = '$numero'";

	


	     
			$query_update = mysqli_query($con,$sql);
			$query_update = mysqli_query($con,$sql1);
		$query_update = mysqli_query($con,$sql2);
			if ($query_update){
				$messages[] = "Sala 6  Rack=$fila$numero";
			} else{
				$errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($con);
			}
		}
		
		






		if ($sala == 7) {
 

$sql=" DELETE  From rack Where fila='$fila' AND rack = '$numero' and sala='$sala'";
		
	
	
$sql1 = "INSERT INTO papelera SELECT * FROM sala7 where fila='$fila' AND rack = '$numero'";


$sql2 = "DELETE FROM sala7 WHERE fila='$fila' AND rack = '$numero'";

	


	     
			$query_update = mysqli_query($con,$sql);
			$query_update = mysqli_query($con,$sql1);
		$query_update = mysqli_query($con,$sql2);
			if ($query_update){
				$messages[] = "Sala 7  Rack=$fila$numero";
			} else{
				$errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($con);
			}
		}
		






		if ($sala == 8) {
 

		$sql=" DELETE  From rack Where fila='$fila' AND rack = '$numero' and sala='$sala'";
		
	
	
$sql1 = "INSERT INTO papelera SELECT * FROM sala8 where fila='$fila' AND rack = '$numero'";


$sql2 = "DELETE FROM sala8 WHERE fila='$fila' AND rack = '$numero'";

	


	     
			$query_update = mysqli_query($con,$sql);
			$query_update = mysqli_query($con,$sql1);
		$query_update = mysqli_query($con,$sql2);
			if ($query_update){
				$messages[] = "Sala 8  Rack=$fila$numero";
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
						<strong>¡Ultimo dato Eliminado</strong>
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