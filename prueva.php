<?php
   
$servername = "localhost";
$username = "juego";
$password = "";
$database = "datos_del_jugador";

$enlace = mysqli_connect($servername, $username, $password, $database);

if(!$enlace){
    echo "error en laconexion con el servidor";
}?>

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
                    <h1> <div class="spam"> l  f q k o </div> El suertudo <div class="spam"> m n a f  l </div> </h1>
                       
            </header>
                <!--***************** Fin de Encabezado ( titulo ) **********************************************-->

 <section>
        <div>
        <?php
        if(isset($_POST['registrarse'])){
            $nombre=$_POST['nombre'];
            $apellido=$_POST['apellido'];
            $stelefono=$_POST['telefono'];
            $dato=$_POST['dato'];
            
            
            $insertarDatos="INSERT INTO datos_de_inscritos VALUES(
                                            '$nombre',
                                            
                                            '$apellido',
                                            
                                            '$telefono',

                                            '$dato'
                                            
                                           /*  '$correo',
                                            
                                           '$fecha'*/
                                            )";
                                            
        $ejecutarinsertar=mysqli_query($enlace, $insertarDatos);
        echo "<h2>informacion recibida<h2>" . "<hr/>";
        
        echo "su nombre es :" . $nombre . "<hr/>";
        
        echo "su apellido es :" . " " .$apellido . "<hr/>";
        
        echo "su telefono es :" . " " . $telefono . "<hr/>";
        
        echo "su numero es :" . " " . $dato . "<hr/>";
        
            //verificamos la ejecucion
            
            if(!$ejecutarinsertar){
                echo "hay un error en la linea sql";
            }
             else{
                echo"Datos Guardados Correctamente<br><a href='tiquet.php'>Volver</a>";
            }
        
          }
             mysqli_close($enlace);
     ?>
        </div>              
            <hr>
                <a href="tiquet.php"> <input type="submit" value="volver"></a>
</section>


</div><!-- fin de caja contenedora -->
</body>
</html>
