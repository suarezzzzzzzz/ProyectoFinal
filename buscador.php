<?php

require_once 'clases/database.php';
require_once 'clases/conexion.php';
require_once 'newDataBase.php';

$modelo = $_POST['modelo'];
$color = $_POST['color'];
$precio = $_POST['precio'];


    if (isset($_SESSION['id']) && isset($_SESSION['usuario'])) {
    require_once 'clases/database.php';
    require_once 'clases/conexion.php';

    $db = new Database();
    $con = $db->conectar();

    $sql = "SELECT * FROM productos WHERE activo = 1";
    
    if ($modelo != 'todas') {
        $sql .= " AND modelo LIKE '%$modelo%'";    
    }
    
    if($precio == '0-30'){
         $sql .= " AND precio BETWEEN 0 AND 30000";
    }
    if($precio == '30-60'){
        $sql .= " AND precio BETWEEN 30000 AND 60000";
    }
    if($precio == '60-100'){
        $sql .= " AND precio BETWEEN 60000 AND 100000";
    }   
    if ($color != 'todas') {
        $sql .= " AND color LIKE '%$color%'";
    }
    if($precio == 'min-max'){
        $sql .= " ORDER BY precio ASC";
        }
    if($precio == 'max-min'){
        $sql .= " ORDER BY precio DESC";
    }
        
    $aql = $con->prepare($sql); 
    $aql->execute();
    $result = $aql->fetchAll(PDO::FETCH_ASSOC); 
    
    if ($result) {
        echo "<h2>Resultados de la búsqueda:</h2>";
         ?> <link rel="stylesheet" href="bootstrap.min.css">
            <div class="container my-4">
                <div class="row row-cols-1 row-cols-sm-3 row-cols-md-4 g-4 display-flex" >
                   <?php  foreach ($result as $row){ ?>
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
                    <?php  } ;  ?>
                </div> 
                <?php          
        } else {
            echo "No se encontraron resultados.";
        }
}else{
    header("Location: home.php");
    exit();
} ?>
