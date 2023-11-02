<?php
require_once 'clases/conexionCRUD.php';


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

    public function queryHome(){
        $sql = $this->con->query("SELECT id_Producto, modelo, precio, color, activo FROM productos WHERE activo = 1");
        $produc = $sql->fetch_all(MYSQLI_ASSOC);
        return $produc;
    }

    public function filtrarProducto($modelo, $precio, $color){
        $sql = "SELECT * FROM productos WHERE activo = 1";
            
        if ($modelo != 'todas') {
                $sql .= " AND modelo LIKE '%$modelo%'";    
        }
        if($precio == '0-30'){
            $sql .= " AND precio BETWEEN 0 AND 30000";
        }
        if($precio == '30-60'){
            $sql .= " AND precio BETWEEN 30000 AND 60000";
        }
        if($precio == '60-100'){
            $sql .= " AND precio BETWEEN 60000 AND 100000";
        }   
        if ($color != 'todas') {
            $sql .= " AND color LIKE '%$color%'";
        }
        if($precio == 'min-max'){
            $sql .= " ORDER BY precio ASC";
        }
        if($precio == 'max-min'){
            $sql .= " ORDER BY precio DESC";
        }
        $query = $this->con->query($sql);
        $result= $query->fetch_all(MYSQLI_ASSOC);
        return $result;
        } 
    

    public function getProducto(){
        $result = $this->con->query('SELECT * FROM productos');
        $listProductos = $result->fetch_all(MYSQLI_ASSOC);
        return $listProductos;
    }

    public function insertProducto($modelo, $precio,$color, $activo){
        if(!empty($modelo) && (!empty($precio)) && (!empty($color)) && (!empty($activo))){
            $insertar = $this->con->query("INSERT INTO productos(modelo,precio,color, activo) VALUES('$modelo', $precio, '$color', $activo)");
            header("Location: crud.php");
        } else{
            echo "<script> alert('Debe rellenar todos los campos');</script>";
        }
    }

    public function deleteProducto($id_producto){
        $id_producto=(int) $_GET['id_producto'];
        $eliminar = $this->con->query('DELETE FROM productos WHERE id_producto=' . $id_producto );
        header("Location: crud.php");
    }
    public function updateProducto($modelo, $precio, $color, $activo, $id_producto){
        $sql = "UPDATE productos SET modelo=:modelo,precio=:precio,color=:color,activo=:activo WHERE id_producto=:id_producto";
        $query = $this->con->prepare($sql);
        $query->bindValue(':modelo',$modelo);
        $query->bindValue(':precio',$precio);
        $query->bindValue(':color',$color);
        $query->bindValue(':activo',$activo);
        $query->bindValue(':id_producto',$id_producto);
        $query->execute();
        header('location:index.php');
    }

}

