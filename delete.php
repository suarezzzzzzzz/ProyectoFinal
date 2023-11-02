<?php 
include_once 'clases/conexionCRUD.php';
include_once 'clases/funcionesCRUD.php';

$id_producto = $_POST['id_producto'];

$borrar = new funcionesCRUD($id_producto);
$borrar->deleteProducto($id_producto);


?>