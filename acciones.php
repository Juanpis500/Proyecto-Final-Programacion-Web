<?php
	//print '<pre>';
    //print_r($_POST);
    //print_r($_FILES);

   require 'vendor/autoload.php';
   $producto = new ischop\Producto;

  //Registrar un nuevo producto

	if($_SERVER['REQUEST_METHOD'] ==='POST'){

    if ($_POST['accion']==='Crear'){

        if(empty($_POST['Nombre_Prod']))
            exit('Completa Nombre del Producto');
        
        if(empty($_POST['Precio']))
            exit('Completar titulo');

        if(empty($_POST['categoria_id']))
            exit('Seleccionar una Categoria');

        if(!is_numeric($_POST['categoria_id']))
            exit('Seleccionar una Categoria válida');
		
		if(empty($_POST['Descripcion']))
            exit('Descripcion');
		
      
      
        
        $_params = array(
            'Nombre_Prod'=>$_POST['Nombre_Prod'],
			'categoria_id'=>$_POST['categoria_id'],
			'Imagen'=> subirImagen(),
            'Precio'=>$_POST['Precio'],
			'Descripcion'=>$_POST['Descripcion'],
           
           
            
        );

        $rpt = $producto->registrar($_params);
		if($rpt)
			header('Location: pag_admin_2.php');
		else
			print 'Error al registrar un producto';
		
	    }
		
		
	
		
		
		
		
		
		//Actualizar Producto por su ID
		if ($_POST['accion']==='Actualizar'){
		   if(empty($_POST['Nombre_Prod']))
            exit('Completa Nombre del Producto');
        
        if(empty($_POST['Precio']))
            exit('Completar titulo');

        if(empty($_POST['categoria_id']))
            exit('Seleccionar una Categoria');

        if(!is_numeric($_POST['categoria_id']))
            exit('Seleccionar una Categoria válida');
		
		if(empty($_POST['Descripcion']))
            exit('Descripcion');
		
      
      
        
        $_params = array(
            'Nombre_Prod'=>$_POST['Nombre_Prod'],
			'categoria_id'=>$_POST['categoria_id'],
            'Precio'=>$_POST['Precio'],
			'Descripcion'=>$_POST['Descripcion'],
			'id'=>$_POST['id'],
           
          );  //Validación si la Imagen no esta vacia, se carga el valor que tenia
			if(!empty($_POST['Imagen_temp']))
				$_params['Imagen'] =$_POST['Imagen_temp'];
										   
			//Si no tiene imagen se carga una nueva
			if(!empty($_FILES['Imagen']['name']))
				$_params['Imagen'] =subirImagen();
		



        $rpt = $producto->actualizar($_params); 
		if($rpt)
			header('Location: pag_admin_2.php');
		else
			print 'Error al actualizar un producto';
		
	    }
		  
	


	}

    
      
	  
//Borrar productos
if($_SERVER['REQUEST_METHOD'] ==='GET'){
	
	$id = $_GET['id'];
	
	 $rpt = $producto->eliminar($id);
		if($rpt)
			header('Location: pag_admin_2.php');
		else
			print 'Error al eliminar un producto';
		
}
		
	





      
		
		
		function subirImagen() {

                   $carpeta = __DIR__.'upload/'; //ruta de uploadaiuda aaqui

                   $archivo = $carpeta.$_FILES['Imagen']['name'];

                    move_uploaded_file($_FILES['Imagen']['tmp_name'],$archivo);

                    return $_FILES['Imagen']['name'];

    }
		
		



