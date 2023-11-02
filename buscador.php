<html>
<header data-bs-theme="dark">
            <div class="collapse text-bg-dark" id="navbarHeader"></div>
            <div class="navbar navbar-dark bg-dark shadow-sm">
            <div class="container">

                <a href="home.php" class="navbar-brand d-flex align-items-center">
                    <strong>VANS</strong> 
                </a>
        </div> 
                <button class="btn btn-light font-weight-bold">
                    <nav class="menu"> 
                        <a href="Crud.php" class="text-dark">CRUD</a>
                    </nav>
                </button>
            </div>
            </div>
        </header>
</html>
<?php
require_once 'clases/database.php';
require_once 'clases/funcionesCRUD.php';

$modelo = $_POST['modelo'];
$color = $_POST['color'];
$precio = $_POST['precio'];

//llama a la funcion conectar para conectarse a la BDD
$db = new Database();
$con = $db->conectar();

//llama a la funcion filtrarProducto para hacer el filtrado
$filtro = new funcionesCRUD();
$result = $filtro->filtrarProducto($modelo, $precio, $color);

    
    if ($result) { 
        echo "<h2>Resultados de la búsqueda:</h2>";
         ?><body class="bg-dark">      
         <link rel="stylesheet" href="bootstrap.min.css">
            <div class="container my-4">
                <div class="row row-cols-1 row-cols-sm-3 row-cols-md-4 g-4 display-flex" >
                   <?php  foreach ($result as $row){ ?>
                    <div class="col ">
                        <div class="card shadow-md mb-3 display-flex h-86"   >
                            <?php
                            $id = $row['id_producto'];
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
                    <?php  } ;  ?>
                </div> 
            </body>
        <?php          
        } else {
            header('Location: ' . 'home.php');
            echo alert("No se encontraron resultados.") ;
        }
?>
