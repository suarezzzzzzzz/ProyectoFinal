<?php
require_once 'usuario.php';
require_once 'RepositorioUsuario.php';


class ControladorSesion
{
    protected $usuario = null;

    public function login($nombre_usuario, $clave)
    {
        $repo = new RepositorioUsuario();
        $usuario = $repo->login($nombre_usuario, $clave);
        //Si falló el login:
        if ($usuario === false) {
            return [false, "Error de credenciales"];
        }
        else {
            session_start();
            $_SESSION['usuario'] = serialize($usuario);
            return [true, "Usuario autenticado correctamente"];
        }
    }
}
    
    