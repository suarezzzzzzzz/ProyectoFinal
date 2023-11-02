<?php
require_once 'clases/conexionCRUD.php';
require_once 'clases/calzado.php';


class funcionesCRUD extends Connection{

    protected $modelo;
    protected $precio;
    protected $color;
    protected $activo;
    protected $id_producto;
    protected $valor_buscar;

    public function __construct(){
        parent::__construct();
    }

    public function getProducto(){
        $result = $this->con->query('SELECT * FROM productos');
        $listProductos = $result->fetch_all(MYSQLI_ASSOC);
        return $listProductos;
    }
/*AGREGAR */
    public function insertProducto($modelo, $precio,$color, $activo){
        $insertar = $this->con->query("INSERT INTO productos(modelo,precio,color, activo) VALUES('$modelo', $precio, '$color', $activo)");
        header("Location: crud.php");
    }
/*BORRAR */
    public function deleteProducto($id_producto){
        $id_producto=(int) $_GET['id_producto'];
        $eliminar = $this->con->query('DELETE FROM productos WHERE id_producto=' . $id_producto );
        header("Location: crud.php");
    }

    /*ACTUALIZAR */
    public function updateProducto($modelo, $precio,$color, $activo){
        $sql = "UPDATE productos SET modelo=$modelo,precio=$precio,color=$color,activo=$activo WHERE id_producto=' .$this->id_producto";
        
        $query = $this->con->prepare($sql);
        $query->bindValue(':modelo',$resultado->getmodelo());
        $query->bindValue(':precio',$resultado->getprecio());
        $query->bindValue(':color',$resultado->getcolor());
        $query->bindValue(':activo',$resultado->getactivo());
        $query->execute();
        
        header('location:crud.php');
      }
    
  }













    /*public function buscarProducto($valor_buscar){
        $result = $this->con->query("SELECT * FROM productos WHERE modelo LIKE '$valor_buscar'");
        $buscar = $result->fetch_all();
        return $buscar;        
    }*/

