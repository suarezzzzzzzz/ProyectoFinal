<?php 

include_once 'clases/conexionCRUD.php';


$id_producto = $_POST['id_producto'];
	include_once 'clases/conexionCRUD.php';
	if(isset($_GET['id_producto'])){
		$id_producto=(int) $_GET['id_producto'];
		$delete=$con->prepare('DELETE FROM productos WHERE id_producto=:id_producto');
		$delete->execute(array(
			':id_producto'=>$id_producto
		));
		header('Location: Crud.php');
	}else{
		header('Location: Crud.php');
	}

 ?>