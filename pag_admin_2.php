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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
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
                    <li id="opcion" style="padding:10px"><a href="pag_admin_1.php">Agregar Nuevos productos</a></li>
                    <li id="opcion" style="padding:10px; background-color: #bfbfbf; border-radius: 5px"><a href="pag_admin_2.php">Administrar productos existentes</a></li>
                    <li id="opcion" style="padding:10px"><a href="pag_admin_3.php">Estadisticas de la pagina</a></li>
                </ul>
            </div>
            <div id="sec2_admin_2">
                <p style="font-size: 20px">Listado de Productos:</p><hr><br>
                <div>
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>Nombre del Producto</th>
                            <th>Categoria</th>
                            <th>Imagen</th>
                            <th>Precio</th>
                            <th>Descripcion</th>
                            <th>Inventario</th>
                            <th>Accion</th>
                        </tr>
                        <?php
                              require 'vendor/autoload.php';
                              $producto = new ischop\Producto;
                              $info_producto = $producto->mostrar();//Se encarga de mostrar la lista de las peliculas

                    
                              $cantidad = count($info_producto);//Saber cuantos registros existen en la bd
                              if($cantidad > 0){ //Si existen 
                                $c=0;
                                 for($x =0; $x < $cantidad; $x++){
									  $c++;
                                      $item = $info_producto[$x];//va a recorrer cada arreglo
                                    
                        ?>

					<tr>
                      <td><?php print $c?></td>
                      <td><?php print $item['Nombre_Prod']?></td>
                      <td><?php print $item['Nombre']?></td>

                      
                        
                       <td class="text-center">
                        <?php
                          $Imagen = 'upload/'.$item['Imagen'];
                          if(file_exists($Imagen)){
                        ?>
                          <img src="<?php print $Imagen; ?>" width="70">
                          <?php }else{?>
                              SIN Imagen
                          <?php }?>
                      </td>
                      <td><?php print $item['Precio']?></td>
                     
                      <td><?php print $item['Descripcion']?></td>
                      
                      <td><?php print $item['CantidadTotal']?></td>
                     
                      <td class="text-center">
                        <a href="acciones.php?id=<?php print $item['id']?>" class="btn btn-danger btn-sm" >Eliminar</a><br>
                        <a href="pag_admin_4.php?id=<?php print $item['id']  ?>" class="btn btn-success btn-sm">Modificar</a>
                      </td>
                    
                    </tr>

                    <?php
                      }
                    }else{

                    ?>
                    <tr>
                      <td colspan="6">NO HAY REGISTROS</td>
                    </tr>

                    <?php }?>
                  
                        
					</table>
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
