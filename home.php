<?php
    require_once 'clases/usuario.php';
    require_once 'clases/ControladorSesion.php';
    session_start();

    /*Se comprueba que inicio de sesion del usuario*/
    if (isset($_SESSION['usuario'])) 
    {
        $usuario = unserialize($_SESSION['usuario']);
        date_default_timezone_set("America/Argentina/Buenos_Aires");
        $cs = new ControladorSesion();
        
    } 
        
        
?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>Vans</title>
        <link rel="stylesheet" href="bootstrap.min.css">
        <link href="#" rel="stylesheet">
    </head>
    <body>
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
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-3 row-cols-md-4 g-4" >
                    <?php foreach ($resultado as $row){ ?>
                    <div class="col">
                        <div class="card shadow-sm">
                            <?php
                            $id = $row['id_Producto'];
                            $imagen = "imagenes/producto/" . $id . ".jpg";
                            ?>
                            <img src="<?php echo $imagen; ?>" >
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['descripcion']; ?></h5>
                                <p class="card-text"> $ <?php echo $row['precio']; ?></p>
                                <div class="d-flex justify-content-between align-items-center"></div>   
                                
                            </div>
                        </div>                  
                    </div>
                    <?php }; ?>
                </div>
            </div>
        </main>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>