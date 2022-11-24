<?php
include_once "conexion.php";

class usuario{
	private $c;
	
	public function __construct(){
		$this->c=new conexion();
	}
	
	public function inserta($nombre,$rol){
		
		$resul=$this->c->consulta("INSERT INTO usuarios(nombre,rol) VALUES('$nombre','$rol')");
		if(!$resul)
			return "ERROR: No se ha insertado";
		return "Todo correcto";
	}
	
	public function verUsuario($id){
		return $datos;
	}
	
	public function verUsuarios(){
		
	}
	
	public function modificaUsuario($id,$datos){
		
	}
	
	public function borrarUsuario($id){
		
	}
	
	public function __destruct(){
		$this->c = null;
	}
}
?>