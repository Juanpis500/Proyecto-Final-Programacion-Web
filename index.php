<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>ISChop</title>
    <link rel="stylesheet" href="CSS/estilos.css">
    <script src="https://kit.fontawesome.com/62034752b0.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://csshake.surge.sh/csshake.min.css">
    <link rel="stylesheet"    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<body>
    <header>
        <div>
           <nav class="carrito">
               <a href="#"><i class="fas fa-shopping-cart"></i></a>
               <a href="pag_admin_1.php">Login</a>
           </nav>
           <br><br>
           
           <!-------------------- MENU -------------------->
            <nav  class="menu">
               <div class="contenedor">
                <ul>
                    <li><a href="index.php"><i class="fas fa-home"></i></a></li>
                    <li><a href="#">Tienda</a></li>
                    <li><a href="acercade.php">Acerca de</a></li>
                    <li><a href="#">Ayuda</a></li> 
                    <li><a href="contacto.php">Contáctanos</a></li>
                </ul>
                </div>
            </nav>
        </div>
    </header>
    <br><br>
    

        <!-------------------- CARRUSEL -------------------->
        <nav>
            <div class="slideshow-container">

                <div class="mySlides fade">
                    <img src="images/carrusel1.jpg" style="width:100%">
                </div>

                <div class="mySlides fade">
                    <img src="images/carrusel2.jpg" style="width:100%">
                </div>

                <div class="mySlides fade">
                    <img src="images/carrusel3.png" style="width:100%">
                </div>

              <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
        </nav>
         <div class="shake-horizontal">
             Me meneo.
         </div>

    <br><br>
    
    <footer>
        <nav class="pie">
            <div>
                <h4>Acerca de ISChop</h4>
                <a href="#">¿Quiénes somos?</a>
            </div>
            
            <div>
                <h4>Servicio al cliente</h4>
                <a href="#">Preguntas Frecuentes</a><br>
                <a href="contacto.php">Contáctanos</a>
            </div>
            
            <div>
                <h4>Visítanos en redes sociales</h4>
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-instagram-square"></i></a>
                <a href="#"><i class="fab fa-twitter-square"></i></a>
            </div>

        </nav>
        <div id="derechos">
            <p>Todos los derechos resevados <i class="far fa-copyright"></i> 2020 ISChop utiliza cookies para almacenar los datos de la cuenta.</p>
        </div>
    </footer>
    
    <script src="JavaScript/codigo.js"></script>
</body>
</html>