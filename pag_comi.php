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
    <link rel="icon" href="images/favicon.jpg">
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
                    <img src="images/logob.png" alt="" width="130px">
                    <li><a href="index.php"><i class="fas fa-home"></i></a></li>
                        <div class="dropdown">
                          <button class="dropbtn">Categorias <i class="fas fa-caret-down"></i></button>
                          <div class="dropdown-content">
                            <a href="#">Tecnologia <i class="fas fa-microchip"></i></a>
                            <a href="#">Comida <i class="fas fa-utensils"></i></a>
                          </div>
                        </div>
                    <li><a href="acercade.php">Acerca de</a></li>
                    <li><a href="ayuda.php">Ayuda</a></li> 
                    <li><a href="contacto.php">Contáctanos</a></li>
                </ul>
                </div>
            </nav>
        </div>
    </header>
    <section>
        
    </section>
    <footer>
        <nav class="pie">
            <div>
                <h4>Acerca de ISChop</h4>
                <a href="#">¿Quiénes somos?</a>
            </div>
            
            <div>
                <h4>Servicio al cliente</h4>
                <a href="ayuda.php">Preguntas Frecuentes</a><br>
                <a href="contacto.php">Contáctanos</a>
            </div>
            
            <div>
                <h4>Visítanos en redes sociales</h4>
                <a href="https://www.facebook.com/ISChop-101255348559329" target="_blank"><i class="fab fa-facebook"></i></a>
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