<?php
	include_once 'clases/conexionCRUD.php';

	$sentencia_select=$con->prepare('SELECT *FROM productos ORDER BY id_producto DESC');
	$sentencia_select->execute();
	$resultado=$sentencia_select->fetchAll();

	// metodo buscar
	if(isset($_POST['btn_buscar'])){
		$buscar_text=$_POST['buscar'];
		$select_buscar=$con->prepare('
			SELECT *FROM productos WHERE modelo LIKE :campo OR color LIKE :campo;'
		);

		$select_buscar->execute(array(
			':campo' =>"%".$buscar_text."%"
		));

		$resultado=$select_buscar->fetchAll();

	}

	session_start();

	$varsesion = $_SESSION['usuario'];
	if($varsesion == null || $varsesion= '') {

		header("Location:index.php");


	}

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>CRUD</title>
	<link rel="stylesheet" href="css/estilo.css">
	<link rel="stylesheet" href="css/estiloCRUD.css">
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
<body class="border-dark ">
	<div class="contenedor ">
		<a href="home.php">
			<h1 class="titulo2 text-dark">ABM VANS</h1>
			</a>
		<div class="barra__buscador">
			<form action="" class="formulario" method="post">
				<input type="text" name="buscar" placeholder="buscar nombre o marca" 
				value="<?php if(isset($buscar_text)) echo $buscar_text; ?>" class="input__text">
				<input type="submit" class="btn" name="btn_buscar" value="Buscar">
				<a href="insert.php" class="btn btn__nuevo">AGREGAR</a>
			</form>
		</div>
		<table class="table-striped text-light table-bordered ">
			<tr class="head bg-dark ">
				<td>Id</td>
				<td>Modelo</td>
				<td>Precio</td>
				<td>Color</td>
				<td>Activo</td>
				<td colspan="2">Acción</td>
			</tr>
			<?php foreach($resultado as $fila):?>
				<tr>
					<td><?php echo $fila['id_producto']; ?></td>
					<td><?php echo $fila['modelo']; ?></td>
					<td><?php echo $fila['precio']; ?></td>
					<td><?php echo $fila['color']; ?></td>
					<td><?php echo $fila['activo']; ?></td>
					<td><a href="update.php?id_producto=<?php echo $fila['id_producto']; ?>"  class="btn__update" >Editar</a></td>
					<td><a href="delete.php?id_producto=<?php echo $fila['id_producto']; ?>" class="btn__delete">Eliminar</a></td>
				</tr>
			<?php endforeach ?>

		</table>
	</div>
</body>
</html>