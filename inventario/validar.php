<?php

session_start();
	include_once("conection/cone.php");

	$username=$_POST['username'];
	$pass=$_POST['password'];

	$password = MD5($pass);

  


	$sql=mysqli_query($mysqli,"SELECT * FROM usuarios  WHERE rut ='$username'");
	if($f=mysqli_fetch_assoc($sql)){
		if($password==$f['pass']){
			$_SESSION['id']=$f['rut'];
			$_SESSION['user']=$f['nombre'];
			//$_SESSION['rol']=$f['rol'];

			header("Location:../inventario");
		}else{
			echo '<script>alert("La contraseña es incorrecta, por favor ingrese otra vez")</script> ';
			echo "<script>location.href='javascript:window.history.back();'</script>";
		}
	}else{
		
		echo '<script>alert("El usuario no existe") </script>';
		echo "<script>location.href='javascript:window.history.back();'</script>";
	}
?>