<?php 
session_start(); 
include "clases/conexion.php";

if (isset($_POST['usuario']) && isset($_POST['contraseña'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$usuario = validate($_POST['usuario']);
	$pass = validate($_POST['contraseña']);

	if (empty($usuario)) {
		header("Location: index.php?error=Debe ingresar USUARIO");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Debe ingresar CONTRASEÑA");
	    exit();
	}else{
		$sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['usuario'] === $usuario && $row['password'] === $pass){
            	$_SESSION['usuario'] = $row['usuario'];
				$_SESSION['nombre'] = $row['nombre'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: home.php");
		        exit();
            }else{
				header("Location: index.php?error=Usuario o contraseña INCORRECTA");
		        exit();
			
		}
			header("Location: index.php?error=Usuario o contraseña INCORRECTA");
	        exit();
		}
	}
}else{
	header("Location: index.php");
	exit();
}
