<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contáctanos</title>
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
    
    <nav id="navcont">
        <h1 style="text-align:center; font-size:35px;">Contáctanos</h1>
        <nav style=display:flex;>
            <div class="cont">
                <img src="images/contacto.png" alt="Contacto" width="350px">
            </div>
            <div class="cont">
                <form action="correo.php" method="post">
                    <input type="text" name="nombre" placeholder="Nombre completo" required><br><br>
                    <input type="text" name="email" placeholder="Email" required><br><br>
                    <input type="password" name="secret" placeholder="Password" required><br><br>
                    <input type="text" name="asunto" placeholder="Asunto"><br><br>
                    <textarea name="mensaje" id="mensaje" cols="46" rows="7" style="font-family: 'Quicksand', sans-serif; font-size:13px;" placeholder="Mensaje"></textarea><br>
                    <input type="submit" class="btn">
                </form>
                
            </div>
            <div class="cont">
                <h1 style="font-size:25px;">O contáctanos por teléfono</h1>
                <p>Llámanos al número 475 953 1506 <br><br>Nuestro horario de atención es: <br>Lunes a viernes de 9:00 a 16:00</p>
            </div>
        </nav>
    </nav>
    
    
    
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