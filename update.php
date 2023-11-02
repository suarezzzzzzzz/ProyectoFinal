<?php
	include_once 'clases/conexionCRUD.php';
	include_once 'clases/funcionesCRUD.php';
	
	
	/*if(isset($_GET['id_producto'])){
		$id_producto=(int) $_GET['id_producto'];

		$buscar_id=$con->prepare('SELECT * FROM productos WHERE id_producto=:id_producto LIMIT 1');
		$buscar_id->execute(array(
			':id_producto'=>$id_producto
		));
		$resultado=$buscar_id->fetch();
	}else{
		header('Location: Crud.php');
	}*/

	/*$productos = new funcionesCRUD();
	$resultado = $productos->getProducto();*/

	$prod = new funcionesCRUD();
	$id_producto = $_GET['id_producto'];
	$resultado = $prod->searchProducto($id_producto);


	if (isset($_POST['guardar'])){
		$modelo = $_POST['modelo'];
		$precio = $_POST['precio'];
		$color = $_POST['color'];
		$activo = $_POST['activo'];

		require_once 'clases/funcionesCRUD.php';
		$produ = new funcionesCRUD();
		$produ->updateProducto($modelo, $precio, $color, $activo, $id_producto);	

	}





	/*if(isset($_POST['guardar'])){
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
			}else{
			echo "<script> alert('Los campos estan vacios');</script>";
		}
	}*/
	
	if(isset($_GET['guardar'])){
		$id_producto=(int) $_GET['id_producto'];
		$modelo = $_POST['modelo'];
		$precio = $_POST['precio'];
		$color = $_POST['color'];
		$activo = $_POST['activo'];

		require_once 'clases/funcionesCRUD';
		$modificar = new funcionesCRUD();
		$resultado = $modificar->updateProducto($modelo, $precio,$color,$activo);
		
	}
	
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Editar Articulo</title>
	<link rel="stylesheet" href="css/estiloCRUD.css">
	<link rel="stylesheet" href="css/estilo.css">
	<link rel="stylesheet" href="bootstrap.min.css">
</head>
<header data-bs-theme="dark">
            <div class="collapse text-bg-dark" id="navbarHeader"></div>
            <div class="navbar navbar-dark bg-dark shadow-sm">
            <div class="container">

                <a href="home.php" class="navbar-brand d-flex align-items-center">
                    <strong>VANS</strong> 
                </a>
        </div> 
                <button class="btn btn-light font-weight-bold">
                    <nav class=""> 
                        <a href="Crud.php" class="text-dark">CRUD</a>
                    </nav>
                </button>
            </div>
            </div>
        </header>
<body class="border-dark">
	<div class="contenedor">
		<h1 class="titular text-dark font-weight-bold" aling="center">.: Editar artículo :.</h1>
		<form action="" method="post">
			<?php foreach($resultado as $value){?>			
			<div class="form-group">
				<input type="text" name="modelo" value="<?php $value['modelo']; ?>" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" name="precio" value="<?php $value['precio']; ?>" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" name="color" value="<?php $value['color']; ?>" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" name="activo" value="<?php $value['activo']; ?>" class="input__text">
			</div>
			<?php } ?>
			<div class="btn__group">
				<a href="Crud.php" class="btn btn__danger">Cancelar</a>
				<input type="submit" name="guardar" value="Guardar" class="btn btn__primary">
			</div>
		</form>
	</div>
</body>
</html>