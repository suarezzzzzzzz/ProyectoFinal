<?php
class zapato{
    private $id_producto;
    private $modelo;
    private $precio;
    private $color;
    private $activo;
    

    public function __construct($id_producto,$modelo,$precio,$color,$activo){
        $this->id_producto = $id_producto;
        $this->modelo = $modelo;
        $this->precio = $precio;
        $this->color = $color;
        $this->activo = $activo;
        
    }
    //Getters
    public function getid_producto(){
        return $this->id_producto;
    }
    public function getmodelo(){
        return $this->modelo;
    }    
    public function getprecio(){
        return $this->precio;
    }
    public function getcolor(){
        return $this->color;
    }
    public function getactivo(){
        return $this->activo;
    }
    

    //Setters
    public function setid_producto($id_producto){
        $this->id_producto = $id_producto;
    }
    public function setmodelo($modelo){
        $this->modelo = $modelo;
    }    
    public function setprecio($precio){
        $this->precio = $precio;
    }
    public function setcolor($color){
        $this->color = $color;
    }
    public function setactivo($activo){
        $this->activo = $activo;
    }
   



}