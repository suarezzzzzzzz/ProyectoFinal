<?php
require_once 'clases/database.php';

class Filtrar
{   
    public function __construct($modelo, $color, $precio){
        $this->modelo = $modelo;
        $this->color = $color;
        $this->precio = $precio;
    }

    public function getQuery(){
    $sql = "SELECT * FROM productos WHERE activo = 1";
    
    if ($this->modelo != 'todas') {
        $sql .= " AND modelo LIKE '%$this->modelo%'";    
    }
    if($this->precio == '0-30'){
         $sql .= " AND precio BETWEEN 0 AND 30000";
    }
    if($this->precio == '30-60'){
        $sql .= " AND precio BETWEEN 30000 AND 60000";
    }
    if($this->precio == '60-100'){
        $sql .= " AND precio BETWEEN 60000 AND 100000";
    }   
    if ($this->color != 'todas') {
        $sql .= " AND color LIKE '%$this->color%'";
    }
    if($this->precio == 'min-max'){
        $sql .= " ORDER BY precio ASC";
    }
    if($this->precio == 'max-min'){
        $sql .= " ORDER BY precio DESC";
    }
    return $sql;
    }    
}
?>