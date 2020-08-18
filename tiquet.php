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
            <section>
                <img  src="img/logoheade.jpg" alt="">
         </section>            
                </header>
             <!--*****************Encabezado ( titulo )**********************************************-->
             <!--***************** Formulario De Participantes  **********************************************-->

                            
                            
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
                                        <input type="number" required="required" name="telefono">
                                </div>
                            <div class="datos">
                                        <label>Documento</label>
                                        <input type="number" required="required" name="documento">
                                </div>
                            
                            <div class="datos">
                                        <label >numero</label>
                                        <input type="number" name="numero" />
                                </div>
                                <div class="datos">
                                        <label >Referido por</label>
                                        <input type="tex" name="referido" />
                                </div>
                                <!--******inicio del boton*******-->
                            <div class="datos">

                                    <input type="submit"  id="" class="btn btn-outline-success" name="registrarse" >
                            </div>
                                <!--******fin del boton****--> 
                         </form>
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
