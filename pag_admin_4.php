      <?php
          
     //Recoge la info del formulario por id     
     require 'vendor/autoload.php';
     
     if(isset($_GET['id']) && is_numeric($_GET['id'])){
          $id = $_GET['id'];
    
          $producto = new ischop\Producto;
          $resultado = $producto->mostrarPorId($id);

      if(!$resultado)
          header('Location: pag_admin_2.php');

  }else{
    header('Location: pag_admin_2.php');
  }

  

  
 




  ?>
               
       <div id="sec2_admin">
                <p style="font-size: 20px">Modificar Productos:</p><hr>
                <div>
                    <form action="acciones.php" enctype="multipart/form-data" method="post">
                       <input type="hidden" name="id" value="<?php print $resultado['id'] ?>">
                        <label for="">Nombre producto:</label>
                        <input type="text" required style="margin-left: 55px" name="Nombre_Prod" value="<?php print $resultado['Nombre_Prod'] ?>"><br><br>
                        <label for="imag">Inserte la imagen:</label>
                        <input type="file" id="imag" name="Imagen" required style="margin-left: 58px; border-bottom: none;">
                         <input type="hidden" name="foto_temp" value="<?php print $resultado['Imagen']?>">
                        <br><br>
                        <label for="">Precio:</label>
                        <input type="text" min="0" required style="margin-left: 143px" name="Precio" value="<?php print $resultado['Precio'] ?>"><br><br>
                        <label for="">Categoria:</label>
                        <select name="categoria_id" style="margin-left: 115px" required>
                        <option value=" ">--SELECCIONE--</option>
                        <?php
                             require 'vendor/autoload.php';
                              $categoria = new ischop\Categoria;
                              $info_categoria = $categoria->mostrar();
                              $cantidad = count($info_categoria);
                                for($x =0; $x< $cantidad;$x++){
                                  $item = $info_categoria[$x];
                              ?>
                                <option value="<?php print $item['id'] ?>"
                                 <?php print $resultado['categoria_id']== $item['id'] ?'selected':'' ?>
                                ><?php print $item['Nombre'] ?></option>
                            

                              <?php

                                }
                              ?>
                        </select>
                        <br><br>	
                        <label for="">Descripcion:</label>
                        <input type="text" width="100%" height="100%" style="margin-left: 102px" name="Descripcion" value="<?php print $resultado['Descripcion'] ?>">
                        <input type="submit" value="Actualizar" id="btn_nproductos" name="accion">
                    </form>
                </div>
            </div>