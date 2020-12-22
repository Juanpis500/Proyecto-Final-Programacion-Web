class Producto{

  private $config;
  private $cn = null;
  
  public function_construct(){
  
     $this->config=parse_ini_file(_DIR_'config.ini'); //Devuelve el contenido del archivo 
     print_r($this->config); //lee variavle
     
      
  
  }
  

}