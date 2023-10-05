<?php
   session_start();

   if (isset($_SESSION['id']) && isset($_SESSION['usuario'])) {
    require_once 'clases/database.php';

$db = new Database();
$con = $db->conectar();

$sql = $con->prepare("SELECT id_Producto, modelo, precio FROM productos");

$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);     
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

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            </div>
        </header>

        <main>   
            <div class="container my-4">
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
        </main>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>

    <?php 
}else{
     header("Location: index.php");
     exit();
}
?>