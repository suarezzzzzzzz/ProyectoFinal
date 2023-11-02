<?php
	include_once 'clases/conexionCRUD.php';
	include_once 'clases/funcionesCRUD.php';

	if (isset($_POST['guardar'])){
		$modelo = $_POST['modelo'];
		$precio = $_POST['precio'];
		$color = $_POST['color'];
		$activo = $_POST['activo'];
		
	$actualizar = new funcionesCRUD();
	$update = $actualizar->updateProducto($modelo, $precio, $color, $activo);
		
	
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
