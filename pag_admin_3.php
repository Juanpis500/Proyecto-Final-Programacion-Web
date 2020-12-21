<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>Administrar Pagina</title>
    <link rel="stylesheet" href="CSS/estilos.css">
    <script src="https://kit.fontawesome.com/62034752b0.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://csshake.surge.sh/csshake.min.css">
    <link rel="stylesheet"    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/> 
    <link rel="stylesheet" href="CSS/estilos_Pag_admin.css">
</head>
<body>
    <header>
        <div>
           <nav class="carrito">
               <a href="#">Login</a>
           </nav>
           <br><br>
           <!-------------------- MENU -------------------->
            <nav  class="menu">
               <div class="contenedor">
                <ul>
                    <li><a href="index.php"><i class="fas fa-home"></i></a></li>
                    <li><a href="#">Tienda</a></li>
                </ul>
                </div>
            </nav>
        </div>
    </header>
    <section id="sec_admin">
        <div id="config_admin">
            <div id="Menus_admin">
                <ul>
                    <li><h3>Configuracion</h3></li>
                    <li id="opcion" style="padding:10px"><a href="pag_admin_1.php">Agregar Nuevos productos</a></li>
                    <li id="opcion" style="padding:10px"><a href="pag_admin_2.php">Administrar productos existentes</a></li>
                    <li id="opcion" style="padding:10px; background-color: #bfbfbf; border-radius: 5px"><a href="pag_admin_3.php">Estadisticas de la pagina</a></li>
                </ul>
            </div>
            <div id="sec2_admin">
                <p style="font-size: 20px">Estadisticas de la pagina:</p><hr>
                <div>
            
                </div>
            </div>
        </div>
    </section>
    
    <footer>
        <div id="derechos">
            <p>Todos los derechos resevados <i class="far fa-copyright"></i> 2020 ISChop utiliza cookies para almacenar los datos de la cuenta.</p>
        </div>
    </footer>
</body>
</html>