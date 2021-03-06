<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Acerca de</title>
    <link rel="stylesheet" href="CSS/estilos.css">
    <script src="https://kit.fontawesome.com/62034752b0.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
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
                    <img src="images/logob.png" alt="" width="130px">
                    <li><a href="index.php"><i class="fas fa-home"></i></a></li>
                        <div class="dropdown">
                          <button class="dropbtn">Categorias <i class="fas fa-caret-down"></i></button>
                          <div class="dropdown-content">
                            <a href="pag_tec.php">Tecnologia <i class="fas fa-microchip"></i></a>
                            <a href="pag_comi.php">Comida <i class="fas fa-utensils"></i></a>
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
    
    
    <!-------------------- VENTANA EMERGENTE PARA CÓDIGO DE DESCUENTO -------------------->
       <p style="margin-left: 80%;
      transform: translateX(-80%);">Obtén un código de descuento por tiempo limitado</p>
        <p style="margin-left: 80%;
      transform: translateX(-80%);"><a href="#popup" class="btn">Click aquí</a></p>
        <div id="popup" class="overlay">
            <div id="popupBody">
                <div class="popupContent">
                    <img src="images/DescuentoXMAS.png" alt="" width="360px;" style="margin-left: 50%;
      transform: translateX(-50%);">
                    <br><br>
                    <button id="cerrar" class="btnpop"><a href="#">Cerrar</a></button>
                </div>
            </div>
        </div>
    <hr>
    
    
<br><br>
        <div class="vis-mis">
            <div>
                <h1>Misión</h1>
                <p>Brindar el mejor servicio, los mejores productos hacia toda la sociedad, asegurando la calidad y satisfacción del cliente.</p>
            </div>
            <div><img src="images/mision.png" alt="Misión" width="400px"></div>
        </div>
        <hr>
        <br><br>
        
        <div class="vis-mis">
            <div>
                <img src="images/vision.png" alt="Visión" width="400px">
            </div>
            <div>
                <h1>Visión</h1>
                <p>Ser una empresa sólida y preferente hacia la sociedad, brindando servicios y productos de calidad.</p>
            </div>
        </div>
        <br><br>
        <hr>
        
        
        
        
        
        <div class="vis-mis">
            <div>
                <h1>Objetivo</h1>
                <p>Incursionar en las ventas on-line con un margen de éxito sostenible.</p>
            </div>
            <div>
                <img src="images/objetivos.png" alt="Objetivos" width="350px">
            </div>
        </div>
   
    
    <br><br>
    <footer>
        <nav class="pie">
            <div>
                <h4>Acerca de ISChop</h4>
                <a href="acercade.php">¿Quiénes somos?</a>
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
</body>
</html>