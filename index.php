<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="css/bootstrap.min2.css">
</head>
<body>
<div class="login-card">
	<h2>LOGIN</h2>
	<h3>Ingresar datos</h3>
     <form class="login-form" action="login.php" method="post">
    
		 <?php
            if (isset($_GET['mensaje'])) {
                echo '<div id="mensaje" class="alert alert-primary text-center">
                    <p>'.$_GET['mensaje'].'</p></div>';
            }
        ?>
     	<label>USUARIO</label>
     	<input name="usuario" class="form-control form-control-lg" placeholder="Usuario"><br>

     	<label>CONTRASEÑA</label>
     	<input name="clave" type="password" class="form-control form-control-lg" placeholder="Contraseña"><br>

     	<button type="submit">Login</button>
     </form>
	 </div>
</body>
</html>