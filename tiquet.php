<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>El suertudo</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="estilo.css">
    </head>
<body>
    <div class="container"><!--  caja contenedora -->
    <div class="main-bg"></div>
            <!--*****************Encabezado ( titulo )**********************************************-->
                            <header class="titulo">
                                    <h1> <div class="spam"> l  f q k o </div> El suertudo <div class="spam"> m n a f  l </div> </h1>
                                    
                            </header>
             <!--*****************Encabezado ( titulo )**********************************************-->
             <!--***************** Formulario De Participantes  **********************************************-->

                            <h3>llenar formulario completo</h3>
                            
                            <div class="registro">

                                   <form method="_POST" action="prueva.php" > <!--******inicio del formulario*******-->
                                <div class="datos">
                                            <label>Nombre</label>
                                        <input type="text" required="required" name="nombre">
                                </div>
                            <div class="datos">
                                        <label>apellido</label>
                                        <input type="text" required="required" name="apellido">
                                </div>
                            <div class="datos">
                                        <label>Telefono</label>
                                        <input type="text" required="required" name="telefono">
                                </div>
                                <form method="_POST" action="tiquet.php" >
                            <div class="datos">
                                        <label >numero</label>
                                        <input type="number" name="numero" />
                                <!--******inicio del boton*******-->
                            <div class="datos">
                                    <input type="submit"  id="" class="btn btn-outline-success" name="registrarse" >
                                </div>
                                <!--******fin del boton*******-->
                                </form> <!--******fin  del formulario*******-->
                               
                          </div>
                 <!--***************** Fin del  Formulario De Participantes  **********************************************-->

    
                 <!--***************** Pie de pagina **********************************************-->

                            <footer>
                                <center> <h3>Contacto</h3></center>
                                <h3 class="p"> +57 3197108904 
                                    <br>
                                    cg082490@gmail.com
                                </h3>
                            </footer>
              <!--***************** fin de pagina **********************************************-->

    </div> <!-- fin de caja contenedora -->

</body>
</html>