<?php
include_once 'clases/config.php';


class Connection{

	public $con;

	public function __construct(){
		$this->con = new mysqli(host, user, password, database);
		if($this->con->connect_errno){
			return "Error de conexion";
		}
	}
}

	/*$database="tp_final";
	$user='root';
	$password='';


try {
	
	$con=new PDO('mysql:host=localhost;dbname='.$database,$user,$password);

} catch (PDOException $e) {
	echo "Error".$e->getMessage();
}
*/
?>