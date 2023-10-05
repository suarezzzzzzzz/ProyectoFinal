<?php
 
require_once 'clases/usuario.php';
    session_start();
    if (isset($_SESSION['usuario'])) {
        header('Location: home.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>VANS</title>
</head>
<body>
    
    <div class="login-card">
        <h2>Login</h2>
        <h3>Ingresar datos</h3>

        <form class="login-form" action="login.php">
            <input name="usuario"type="text" placeholder="USUARIO" required>
            <input name="clave" type="password" placeholder="CONTRASEÑA" required>
           
            <button type="submit" value="Ingresar">LOGIN</button>
        </form>
    </div>
    </div>
</body>
>>>>>>> 1bdb28f46cbde3695202f92311ce9700664509a8
</html>