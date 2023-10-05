<<<<<<< HEAD
<?php
/*require_once 'clases/usuario.php';
    session_start();
    if (isset($_SESSION['usuario'])) {
        header('Location: home.php');
    }*/
?>

=======
>>>>>>> 69dd3264b80699bd37f06f2aa633fc0e1eb8bb39
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="login-card">
	<h2>LOGIN</h2>
	<h3>Ingresar datos</h3>
     <form class="login-form" action="login.php" method="post">
     	
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>USUARIO</label>
     	<input type="text" name="usuario" placeholder="usuario"><br>

     	<label>CONTRASEÑA</label>
     	<input type="password" name="contraseña" placeholder="contraseña"><br>

     	<button type="submit">Login</button>
     </form>
	 </div>
</body>
</html>