<?php
   session_start();

   if (isset($_SESSION['id']) && isset($_SESSION['usuario'])) {
    require_once 'clases/database.php';

$db = new Database();
$con = $db->conectar();

$sql = $con->prepare("SELECT id_Producto, modelo, precio, activo FROM productos");

$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);   
}else{
    header("Location: index.php");
    exit();
}  
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
            <div class="container-fluid my-4 col-sm-9 " >                
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 l-5 display-flex ">
                    <?php foreach ($resultado as $row){ 
                        if($row['activo'] == 1){                      
                        ?>
                    <div class="col-8">
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
                                <div class="d-flex justify-content-between align-items-center ">  
                                </div>     
                            </div>
                        </div>                  
                    </div> 
                    <?php }
                    else {
                        }
                    }; ?>
                </div>
            </div> 
          
        </main>

        <h3>Refina tu busqueda</h3> 
        
            <label for="modelo">Modelo</label>
            <select name="modelo" id="modelo">
                <option value="todas">Todas </option>
                <option value="USK8-LOW">U SK8-LOW</option>
                <option value="MSkateSK8-Hi">M Skate SK8-Hi</option>
            </select>
            <br><br>
            <label for="precio">Precio</label>
            <select name="precio" id="precio">
                <option value="todas">Todas</option>
                <option value="0-30">$0 a $30.000</option>
                <option value="30-60">$30.000 a $60.000</option>
                <option value="60-100">$60.000 a $100.000</option>
                <option value="min-max">Mas barato a mas caro</option>
                <option value="max-min">Mas caro a mas barato</option>
            </select>
            <br><br>
            <label for="color">Color</label>
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
                <option value="azul">Checker</option>
                <option value="marron">Marron</option>
                <option value="rojo">Rojo</option>
            </select>
            <button type="submit">Filtrar</button>
        

    <?php
    if(!isset($_POST['modelo'])){$_POST['modelo']= '';}
    if(!isset($_POST['precio'])){$_POST['precio']= '';}
    if(!isset($_POST['color'])){$_POST['color']= '';}

    if($_POST['modelo'] = '' AND $_POST['precio'] = '' AND $_POST['color'] = ''){
        $query = "SELECT * from productos";
    }  
    if ($_POST['modelo'] != ''){
        $query .= " WHERE modelo = '".$_POST['modelo']."' ";
    }
   /*if ($_POST['precio'] != ''){
        $query .= "AND precio = '".$_POST['precio']."' ";
    }*/
    if ($_POST['color'] != ''){
        $query .= " AND color = '".$_POST['color']."' ";
    }


    ?>
        

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>

    <?php 

?>