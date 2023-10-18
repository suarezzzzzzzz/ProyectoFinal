<?php
	include_once 'clases/conexionCRUD.php';

	if(isset($_GET['id_producto'])){
		$id_producto=(int) $_GET['id_producto'];

		$buscar_id=$con->prepare('SELECT * FROM productos WHERE id_producto=:id_producto LIMIT 1');
		$buscar_id->execute(array(
			':id_producto'=>$id_producto
		));
		$resultado=$buscar_id->fetch();
	}else{
		header('Location: Crud.php');
	}


	if(isset($_POST['guardar'])){
        $modelo=$_POST['modelo'];
		$precio=$_POST['precio'];
		$color=$_POST['color'];
		$activo=$_POST['activo'];
		$id_producto=(int) $_GET['id_producto'];

		if(!empty($modelo) &&  !empty($precio) && !empty($color) ){
		
				$consulta_update=$con->prepare(' UPDATE productos SET  
					modelo=:modelo,
					precio=:precio,
					color=:color,
					activo=:activo
					WHERE id_producto=:id_producto;'
				);
				$consulta_update->execute(array(
					':modelo' =>$modelo,
					':precio' =>$precio,
					':color' =>$color,
					':activo' =>$activo,
					':id_producto' =>$id_producto
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
	<title>Editar Articulo</title>
	<link rel="stylesheet" href="css/estiloCRUD.css">
	<link rel="stylesheet" href="css/estilo.css">
</head>
<body>
	<div class="contenedor">
		<h2 class="titular" aling="center">.: Editar Articulo :.</h2>
		<form action="" method="post">
			<div class="form-group">
				<input type="text" name="modelo" value="<?php if($resultado) echo $resultado['modelo']; ?>" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" name="precio" value="<?php if($resultado) echo $resultado['precio']; ?>" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" name="color" value="<?php if($resultado) echo $resultado['color']; ?>" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" name="activo" value="<?php if($resultado) echo $resultado['activo']; ?>" class="input__text">
			</div>
			<div class="btn__group">
				<a href="Crud.php" class="btn btn__danger">Cancelar</a>
				<input type="submit" name="guardar" value="Guardar" class="btn btn__primary">
			</div>
		</form>
	</div>
</body>
</html>
