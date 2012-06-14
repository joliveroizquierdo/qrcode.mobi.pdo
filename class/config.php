<?php
session_start();
class Config{

	private $pdo;
	private $datos;
	
	
	public function __construct(){
	
	
		$this->datos=array();
		$host="localhost";
		$db="tesis";
		$username="root";
		$passwrd="";
		$dsn="mysql:host=$host;dbname=$db";
		
		
		try{
		
			$this->pdo=new PDO($dsn,$username,$passwrd);
			$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
			
		}
		catch(Exception $e){
		
			$this->pdo=null;
			error_log("Error de con la bd".$e->getMessage());
		}
	
	}
	
	private function set_names()
	{
		return $this->pdo->query("SET NAMES 'utf8'");
	}
	
	public function getFacultades(){
		
		self::set_names();
		$stm=$this->pdo->prepare("SELECT id,nombre FROM faculties");
									
		$stm->execute();

		while($row=$stm->fetch()){
		
			$this->datos[]=$row;
		
		}		
		
		return $this->datos;
	
	}
   
   public function getFacultadesPorId($id=null){
		
		
		$id=(int)$id;
		
		
		if(empty($id) OR !$id){
			
			
			$this->_redirect();
		}
		self::set_names();
		$stm=$this->pdo->prepare("SELECT id,nombre,decano,ubicacion,mision,vision,video1,video2 FROM faculties WHERE id='".$id."'");
										
		$stm->execute();

		while($row=$stm->fetch()){
		
			$this->datos[]=$row;
		
		}		
		
		return $this->datos;
	
	}

     public function getDepartamentos(){
		
		self::set_names();
		$stm=$this->pdo->prepare("SELECT id,nombre FROM departments");
									
		$stm->execute();

		while($row=$stm->fetch()){
		
			$this->datos[]=$row;
		
		}		
		
		return $this->datos;
	
	}
	 
	 public function getDepartamentosPorId($id=null){
		
		
		$id=(int)$id;
		
		
		if(empty($id) OR !$id){
			
			
			$this->_redirect();
		}
		self::set_names();
		$stm=$this->pdo->prepare("SELECT id,nombre,ubicacion,mision,vision,video1,video2 FROM departments WHERE id='".$id."'");
										
		$stm->execute();

		while($row=$stm->fetch()){
		
			$this->datos[]=$row;
		
		}		
		
		return $this->datos;
	
	}
	 
	 public function getLaboratorios(){
		
		self::set_names();
		$stm=$this->pdo->prepare("SELECT id,nombre FROM laboratories");
									
		$stm->execute();

		while($row=$stm->fetch()){
		
			$this->datos[]=$row;
		
		}		
		
		return $this->datos;
	
	}
	 
	 public function getLaboratoriosPorId($id=null){
		
		
		$id=(int)$id;
		
		
		if(empty($id) OR !$id){
			
			
			$this->_redirect();
		}
		self::set_names();
		//$stm=$this->pdo->prepare("SELECT laboratories.id,laboratories.nombre,laboratories.ubicacion,laboratories.department_id,departments.nombre FROM laboratories,departments WHERE laboratories.id='".$id."' AND laboratories.department_id=departments.id" );
		$stm=$this->pdo->prepare("SELECT id,nombre,ubicacion,department_id,video1,video2 FROM laboratories WHERE id='".$id."'" );
                                 							
		$stm->execute();

		while($row=$stm->fetch()){
		
			$this->datos[]=$row;
		
		}		
		
		return $this->datos;
	
	}
	 
	public function getDependencias(){
		
		self::set_names();
		$stm=$this->pdo->prepare("SELECT id,nombre FROM dependences");
									
		$stm->execute();

		while($row=$stm->fetch()){
		
			$this->datos[]=$row;
		
		}		
		
		return $this->datos;
	
	}
	 
	 public function getDependenciasPorId($id=null){
		
		
		$id=(int)$id;
		
		
		if(empty($id) OR !$id){
			
			
			$this->_redirect();
		}
		self::set_names();
		//$stm=$this->pdo->prepare("SELECT laboratories.id,laboratories.nombre,laboratories.ubicacion,laboratories.department_id,departments.nombre FROM laboratories,departments WHERE laboratories.id='".$id."' AND laboratories.department_id=departments.id" );
		$stm=$this->pdo->prepare("SELECT id,nombre,ubicacion,funcion,video1,video2 FROM dependences WHERE id='".$id."'" );
                                 							
		$stm->execute();

		while($row=$stm->fetch()){
		
			$this->datos[]=$row;
		
		}		
		
		return $this->datos;
	
	}  

}

?>