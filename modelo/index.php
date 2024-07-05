<?php

class Modelo{
	private $Modelo;
	private $db;

	private $personas = array();

	// Constructor method, initializes the model array and database connection.

	public function __construct(){
		$this->Modelo = array();
		$this->db = new PDO('mysql:host=localhost;dbname=mvc_no_framework', 'root','');
	}

	// funcion para insertar datos en la tabla
	public function insertar($tabla, $datos){
		$consulta = "INSERT INTO ".$tabla." values(null,".$datos.")";
		$result=$this->db->query($consulta);
		if($result){
			return true;
		}else{
			return false;
		}
	}

	// Metodo para mostrar los datos de la tabla
	public function mostrar($tabla,$condicion){

		$consulta = "SELECT * FROM ".$tabla." WHERE ".$condicion.";";
		$result=$this->db->query($consulta);

		// Ciclo para guardar los datos en un arreglo
		while($row = $result->fetch(PDO::FETCH_ASSOC)){
			$this->personas[] = $row;
		}
		return $this->personas;
	}

	// Metodo para actulizar los datos de la tabla
	public function actualizar($tabla, $datos, $condicion){
		$consulta = "UPDATE ".$tabla." SET ".$datos." WHERE ".$condicion;
		$result=$this->db->query($consulta);
		if($result){
			return true;
		}else{
				return false;
			}
	}

	// Metodo para eliminar un resgistro de la tabla
	public function eliminar($tabla, $condicion){
		$consulta = "DELETE FROM ".$tabla." WHERE ".$condicion;
		$result=$this->db->query($consulta);
		if($result){
			return true;
		}else{
				return false;
			}
	}


}