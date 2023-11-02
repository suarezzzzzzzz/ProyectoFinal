<?php 
include_once 'clases/conexionCRUD.php';
include_once 'clases/queries.php';

$id_producto = $_POST['id_producto'];

$borrar = new queries($id_producto);
$borrar->deleteProducto($id_producto);


?>