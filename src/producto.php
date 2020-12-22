<?php

namespace ischop;

class Producto{

    private $config;
    private $cn = null; //para establecer la ruta de la conexión

    public function __construct(){

        $this->config = parse_ini_file(__DIR__.'/../config.ini') ;

        $this->cn = new \PDO( $this->config['dns'], $this->config['usuario'],$this->config['clave'],array(
            \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
        ));
        
    }
	
	 
 public function registrar($_params){
        $sql = "INSERT INTO `productos`(`Nombre_Prod`, `categoria_id`, `Imagen`, `Precio`, `Descripcion`,`CantidadTotal`) 
        VALUES (:Nombre_Prod,:categoria_id,:Imagen,:Precio,:Descripcion,:CantidadTotal)";

        $resultado = $this->cn->prepare($sql);

        $_array = array(
            ":Nombre_Prod" => $_params['Nombre_Prod'],
            ":categoria_id" => $_params['categoria_id'],
            ":Imagen" => $_params['Imagen'],
            ":Precio" => $_params['Precio'],
			":Descripcion" => $_params['Descripcion'],
			":CantidadTotal" => $_params['CantidadTotal']
        );

        if($resultado->execute($_array))
            return true;

        return false;
    }
    public function actualizar($_params){
          $sql = "UPDATE `productos` SET 
		  `Nombre_Prod`=:Nombre_Prod,`categoria_id`=:categoria_id,`Precio`=:Precio,`Descripcion`=:Descripcion,`categoria_id`=:categoria_id,`CantidadTotal`=:CantidadTotal  WHERE `id`=:id";

        $resultado = $this->cn->prepare($sql);//resultado se encarga de devolver cual es el resultado final despues de ejecutar la consulta

        $_array = array( //array de los registros ingresados
            ":Nombre_Prod" => $_params['Nombre_Prod'],
            ":categoria_id" => $_params['categoria_id'],
            ":Imagen" => $_params['Imagen'],
            ":Precio" => $_params['Precio'],
            ":Descripcion" => $_params['Descripcion'],
			":id"=>$_params['id'],
			":CantidadTotal" => $_params['CantidadTotal'],
        );
		 
        //verificar si se pudo ejecutar la bd      
         if($resultado->execute($_array))
            return true;

        return false;
    }

    public function eliminar($id){
        $sql = "DELETE FROM `productos` WHERE `id`=:id ";

        $resultado = $this->cn->prepare($sql);
        
        $_array = array(
            ":id" => $id
        );

        if($resultado->execute($_array))
            return true;

        return false;
    }
	
	//Muestra la Lista de Productos

    public function mostrar(){
        $sql = "SELECT productos.id, Nombre_Prod, Imagen,Precio,Descripcion,Estado,CantidadTotal FROM productos
        
        INNER JOIN categoria
        ON productos.categoria_id = categoria.id ORDER BY productos.id DESC
        ";
        
        $resultado = $this->cn->prepare($sql);

        if($resultado->execute())
			//Se encarga de traer los registros de la tabla en formato arreglo
            return $resultado->fetchAll();

        return false;
    }
	 
	

    public function mostrarPorId($id){
        
        $sql = "SELECT * FROM `productos` WHERE `id`=:id ";
        
        $resultado = $this->cn->prepare($sql);
        $_array = array(
            ":id" =>  $id
        );

        if($resultado->execute($_array))
            return $resultado->fetch();

        return false;
    }







    
}



