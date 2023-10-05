<?php

$sname= "localhost";
$usuario= "root";
$password = "";

$db_name = "login";

$conn = mysqli_connect($sname, $usuario, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}