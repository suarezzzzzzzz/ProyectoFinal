<?php
class Usuario
{
    protected $id;
    protected $usuario;
    

    public function __construct($usuario, $id = null)
    {
        $this->usuario = $usuario;
        $this->id = $id;
       
    }

    public function getId() { return $this->id;}
    public function setId($id) { $this->id = $id; }
    public function getUsuario() {return $this->usuario;}
    public function __toString() {return "Usuario: $this->usuario
                                          ID: $this->id";}
}