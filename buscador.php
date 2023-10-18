<?php
require_once 'clases/database.php';
require_once 'clases/filtrar.php';

$modelo = $_POST['modelo'];
$color = $_POST['color'];
$precio = $_POST['precio'];

$db = new Database();
$con = $db->conectar();

$filtro = new Filtrar($modelo, $color, $precio);
$aql = $filtro->getQuery();

$saql = $con->prepare($aql); 
$saql->execute();
$result = $saql->fetchAll(PDO::FETCH_ASSOC); 
    
    if ($result) {
        echo "<h2>Resultados de la búsqueda:</h2>";
         ?><link rel="stylesheet" href="bootstrap.min.css">
        <body class="bg-dark">   
            <div class="container my-4 ">
                <div class="row row-cols-1 row-cols-sm-3 row-cols-md-4 g-4 display-flex " >
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