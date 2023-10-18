<?php 
	include_once 'clases/conexionCRUD.php';
	
	if(isset($_POST['guardar'])){
		$modelo=$_POST['modelo'];
		$precio=$_POST['precio'];
		$color=$_POST['color'];
		$activo=$_POST['activo'];

		if(!empty($modelo) && !empty($precio) && !empty($color)){
			
				$consulta_insert=$con->prepare('INSERT INTO productos(modelo,precio,color, activo) VALUES(:modelo,:precio,:color,:activo)');
				$consulta_insert->execute(array(
					':modelo' =>$modelo,
					':precio' =>$precio,
					':color' =>$color,
					':activo' =>$activo

					
				));
				header('Location: Crud.php');
			}
		}else{
			echo "<script> alert('Los campos estan vacios');</script>";
		}

	


?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Nuevo Articulo</title>
	<link rel="stylesheet" href="css/estilo.css">
	<link rel="stylesheet" href="css/estiloCRUD.css">
</head>
<body>
	<div class="contenedor">
		<h2 class="titular" aling="center">.: Nuevo Articulo :.</h2>
		<form action="" method="post">
			<div class="form-group">
				<input type="text" name="modelo" placeholder="Modelo" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" name="precio" placeholder="Precio" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" name="color" placeholder="color" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" name="activo" placeholder="activo" class="input__text">
			</div>
			<div class="btn__group">
				<a href="Crud.php" class="btn btn__danger">Cancelar</a>
				<input type="submit" name="guardar" value="Guardar" class="btn btn__primary">
			</div>
		</form>
	</div>
</body>
</html>
