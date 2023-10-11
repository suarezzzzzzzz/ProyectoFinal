<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['usuario'])) {
    require_once 'clases/database.php';
    require_once 'clases/conexion.php';

$db = new Database();
$con = $db->conectar();

$sql = $con->prepare("SELECT id_Producto, modelo, precio, color, activo FROM productos");

$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
}else{
    header("Location: home.php");
    exit();
} ?>
