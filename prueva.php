<?php
session_start();


$_SESSION['nombre'] = $_POST['nombre'];
$_SESSION['apellido'] = $_POST['apellido'];
$_SESSION['telefono'] = $_POST['telefono'];
$_SESSION['documento'] = $_POST['documento'];
$_SESSION['numero'] = $_POST['numero'];
$_SESSION['referido'] = $_POST['referido'];




?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>El suertudo</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="prueva.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
    </head>
<body>
    <div class="containers"><!--caja contenedora -->
                <!--***************** Encabezado ( titulo ) **********************************************-->

        <header class="titulo">
            <img  src="img/logoheade.jpg" alt="">  
            <h3> Nombre: <?php echo($_SESSION['nombre']) ?></h3>  
            <h3> Apellido: <?php echo($_SESSION['apellido']) ?></h3>  
            <h3> Telefono: <?php echo($_SESSION['telefono']) ?></h3>  
            <h3> Documento: <?php echo($_SESSION['documento']) ?></h3>  
            <h3> Número: <?php echo($_SESSION['numero']) ?></h3>  
            <h3> Referido: <?php echo($_SESSION['referido']) ?></h3>
            <button class="btn btn-primary" id="btnConfirmar">
                <a href="connect/msqlConn.php" > <input type="submit" value="Confirmar" class="btn btn-primary"></a>
            </button>         
        </header>
                <!--***************** Fin de Encabezado ( titulo ) **********************************************-->

        <section>
            <div>
            
            </div>              
                <hr>
                    <a href="tiquet.php"> <input type="submit" value="volver"></a>
        </section>


    </div><!-- fin de caja contenedora -->
</body>
</html>
