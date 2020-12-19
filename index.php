<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ISChop</title>
    <link rel="stylesheet" href="CSS/estilos.css">
    <script src="https://kit.fontawesome.com/62034752b0.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <div>
           <nav class="carrito">
               <a href="#"><i class="fas fa-shopping-cart"></i></a>
               <a href="#">Login</a>
           </nav>
           <br><br>
           
           <!-------------------- MENU -------------------->
            <nav  class="menu">
               <div class="contenedor">
                <ul>
                    <li><a href="index.php"><i class="fas fa-home"></i></a></li>
                    <li><a href="#">Tienda</a></li>
                    <li><a href="#">Acerca de</a></li>
                    <li><a href="#">Preguntas frecuentes</a></li>
                    <li><a href="#">Contáctanos</a></li>
                </ul>
                </div>
            </nav>
        </div>
    </header>
    
    
    <body>
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
    </body>
    
    
    <footer>
        <nav class="pie">
            <div>
                <h2>Acerca de ISChop</h2>
                <a href="#">¿Quiénes somos?</a>
            </div>
            
            <div>
                <h2>Servicio al cliente</h2>
                <a href="#">Preguntas Frecuentes</a><br>
                <a href="#">Contáctanos</a>
            </div>
            
            <div>
                <h2>Visítanos en redes sociales</h2>
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-instagram-square"></i></a>
                <a href="#"><i class="fab fa-twitter-square"></i></a>
            </div>

        </nav>
    </footer>
    
    <script src="JavaScript/codigo.js"></script>
</body>
</html>