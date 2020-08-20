<?php
session_start();


$datos = array(
    "nombre" => $_SESSION['nombre'],
    "apellido" => $_SESSION['apellido'],
    "telefono" => $_SESSION['telefono'],
    "documento" => $_SESSION['documento'],
    "numero" => $_SESSION['numero'],
    "referido" => $_SESSION['referido']
);

$servername = "localhost";
$database = "stdjugadores";
$username = "userSuertudo12$";
$password = 'us12#4%sd"';
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO stdjparticipantes (nombre, apellido, telefono, documento, numero, referido) VALUES ('" . $datos['nombre'] . "','" . $datos['apellido'] . "'," . $datos['telefono'] . "," . $datos['documento'] . "," . $datos['numero'] . "," . $datos['referido']. ")";
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);

function select()

{

  //This function will update some column in database to 2

}

function insert($conn, $datos){
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>El suertudo</title>
        <link rel="stylesheet" href="../style.css">
        <link rel="stylesheet" href="../prueva.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
    </head>
<body>
    <div class="containers"><!--caja contenedora -->
                <!--***************** Encabezado ( titulo ) **********************************************-->

        <header class="titulo">
            <h1>Muchas gracias sus datos fueron registrados</h1>      
        </header>
                <!--***************** Fin de Encabezado ( titulo ) **********************************************-->

        <section>
            <div>
            
            </div>              
                <hr>
                    <a href="../tiquet.php"> <input type="submit" value="volver"></a>
        </section>


    </div><!-- fin de caja contenedora -->
</body>
</html>
