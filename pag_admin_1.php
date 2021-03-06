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
                    <img src="images/logob.png" alt="" width="130px">
                    <li><a href="index.php"><i class="fas fa-home"></i></a></li>
                    <div class="dropdown">
                        <button class="dropbtn">Categorias <i class="fas fa-caret-down"></i></button>
                        <div class="dropdown-content">
                            <a href="pag_tec.php">Tecnologia <i class="fas fa-microchip"></i></a>
                            <a href="pag_comi.php">Comida <i class="fas fa-utensils"></i></a>
                        </div>
                    </div>
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
                    <li id="opcion" style="padding:10px; background-color: #bfbfbf; border-radius: 5px"><a href="pag_admin_1.php">Agregar Nuevos productos</a></li>
                    <li id="opcion" style="padding:10px"><a href="pag_admin_2.php">Administrar productos existentes</a></li>
                    <li id="opcion" style="padding:10px"><a href="pag_admin_3.php">Estadisticas de la pagina</a></li>
                </ul>
            </div>
            <div id="sec2_admin">
                <p style="font-size: 20px">Agregar nuevos productos:</p><hr>
                <div>
                    <form action="acciones.php" enctype="multipart/form-data" method="post">
                        <label for="">Nombre producto:</label>
                        <input type="text" required style="margin-left: 55px" name="Nombre_Prod"><br><br>
                        <label for="imag">Inserte la imagen:</label>
                        <input type="file" id="imag" name="Imagen" required style="margin-left: 58px; border-bottom: none;"><br><br>
                        <label for="">Precio:</label>
                        <input type="text" min="0" required style="margin-left: 143px" name="Precio"><br><br>
                        <label for="">Categoria:</label>
                        <select name="categoria_id" style="margin-left: 115px" required>
                         <option value="">--SELECCIONE--</option>
                            <?php
                             require 'vendor/autoload.php';
                              $categoria = new ischop\Categoria;
                              $info_categoria = $categoria->mostrar();
                              $cantidad = count($info_categoria); //Almacena todas las categorias
                                for($x =0; $x< $cantidad;$x++){
                                  $item = $info_categoria[$x];//Se lee cada posicion del arreglo con la variable x
                              ?>
                                <option value="<?php print $item['id'] ?>"><?php print $item['nombre'] ?></option>
                              <?php

                                }
                              ?>
                        </select>
                        <br><br>	
                        <label for="">Descripcion:</label>
                        <input type="text" width="100%" height="100%" style="margin-left: 102px" name="Descripcion">
                         <label for="">Inventario:</label>
                         <input type="number" width="100%" height="100%" style="margin-left: 102px" name="CantidadTotal">
                        <input type="submit"  id="btn_nproductos" name="accion" value="Crear">
                    </form>
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