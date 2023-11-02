<?php
require_once 'clases/Usuario.php';
require_once 'clases/database.php';
include_once 'clases/funcionesCRUD.php';

// Retomamos la sesión previamente iniciada, y recuperamos el objeto Usuario
// que contiene los datos del usuario autenticado:
session_start();
if (isset($_SESSION['usuario'])) {
    $usuario = unserialize($_SESSION['usuario']);
    $nomApe = $usuario->getNombreApellido();
} else {
    // Si no hay usuario autenticado, redirigimos al login.
    header('Location: index.php');
}
//llama a la funcion conectar para conectarse a la BDD
$db = new Database();
$con = $db->conectar();

//llama a la funcion queryHome para mostrar todos los productos en el html
$result = new funcionesCRUD();
$resultado = $result->queryHome();

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>Vans</title>
        <link rel="stylesheet" href="bootstrap.min.css">
        <link href="estilos.css" rel="stylesheet">
    </head>
    <body class="bg-dark">
        <header data-bs-theme="dark">
            <div class="collapse text-bg-dark" id="navbarHeader"></div>
            <div class="navbar navbar-dark bg-dark shadow-sm">
            <div class="container">

                <a href="#" class="navbar-brand d-flex align-items-center">
                    <strong>VANS</strong> 
                </a>
        </div> 
                <button class="btn btn-light font-weight-bold">
                    <nav class="menu"> 
                        <a href="Crud.php" class="text-dark">CRUD</a>
                    </nav>
                </button>

                <button class="btn btn-light font-weight-bold">
                    <nav class="menu">  
                        <a href="logout.php" class="text-dark">Cerrar session</a>
                    </nav>
                </button>
            </div>
            </div>
        </header>

        <main>   
            <div class="container my-4 col-12 ">   
            <div class="row float-left col-2 flex-column bg-light mx-2 my-2 py-2">
                <h3>Refina tu busqueda</h3> 
        <form action=" buscador.php" method="POST">
            <div class="flex-column " >
                <label for="modelo">Modelo</label>
                <select name="modelo" id="modelo" class="">
                <option value="todas">Todas</option>
                <option value="U SK8-LOW">U SK8-LOW</option>
                <option value="M Skate SK8-Hi">M Skate SK8-Hi</option>
                <option value="M Skate Old Skool">M Skate Old Skool</option>
                <option value="Ojota M Slide-On">Ojota M Slide-On</option>
                <option value="U ERA">U ERA</option>
                <option value="U AUTHENTIC">U AUTHENTIC</option>
                <option value="U CLASSIC SLIP-ON">U CLASSIC SLIP-ON</option>
                <option value="M Skate Slip-On">M Skate Slip-On</option>
                <option value="M Zahba">M Zahba</option>
                <option value="Ultra-Range EXO">Ultra-Range EXO</option>
                <option value="W ROWAN">W ROWAN</option>
                </select>
            </div>
            <br>
            <div class="">
            <label for="precio">Precio</label>
                <select name="precio" id="precio">
                    <option value="todas">Todas</option>
                    <option value="0-30">$0 a $30.000</option>
                    <option value="30-60">$30.000 a $60.000</option>
                    <option value="60-100">$60.000 a $100.000</option>
                    <option value="min-max">Mas barato a mas caro</option>
                    <option value="max-min">Mas caro a mas barato</option>
                </select>
            </div>
            <br>
            <div class="">
            <label for="color">Color</label>
            </div>
            <div>
                <select name="color" id="color">
                    <option value="todas">Todos los colores</option>
                    <option value="negro">Negro</option>
                    <option value="gris">Gris</option>
                    <option value="blanco">Blanco</option>
                    <option value="verde">Verde</option>
                    <option value="amarillo">Amarillo</option>
                    <option value="rosa">Rosa</option>
                    <option value="naranja">Naranja</option>
                    <option value="azul">Azul</option>
                    <option value="violeta">Violeta</option>
                    <option value="checker">Checker</option>
                    <option value="marron">Marron</option>
                    <option value="rojo">Rojo</option>
                </select>
                
            </div>
            <br>
            <div class="">
                <button type="submit">Filtrar</button>
            </div>
        </form>
        

                </div>
                <div class="row row-cols-1 row-cols-sm-3 row-cols-md-4 g-4 display-flex" >
                    <?php foreach ($resultado as $row){ ?>
                    <div class="col ">
                        <div class="card shadow-md mb-3 display-flex h-86"   >
                            <?php
                            $id = $row['id_Producto'];
                            $imagen = "imagenes/producto/" . $id . ".jpg";
                            ?>
                            <img class="" id="img" src="<?php echo $imagen; ?> " >
                            <div class="card-body pb-0">
                                <h4 class="text-center">VANS</h3>
                                <h5 class="card-title text-center" > <?php echo $row['modelo']; ?></h5>
                                <p class="card-text text-center"> $<?php echo $row['precio']; ?></p>
                                <div class="d-flex justify-content-between align-items-center "></div>      
                            </div>
                        </div>                  
                    </div>
                    <?php }; ?>
                </div>
                
            </div>
        <div>
        
       

        </main>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>

