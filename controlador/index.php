<?php

require_once "modelo/index.php";

class modeloController{
	private $model;
	public function __construct(){
		$this->model = new Modelo();
	}

	// Método para mostar la vista index.php
	static function index(){
		// $producto nueva instancia del Modelo
		$producto = new Modelo();
		$dato = $producto->mostrar("productos", "1");
		require_once("vista/index.php");
	}

	// Método para crear un nuevo
	static function nuevo(){
		require_once("vista/nuevo.php");
	}

	// Método guardar
	static function guardar(){
		$nombre= $_REQUEST['nombre'];
		$precio= $_REQUEST['precio'];
		$data="'".$nombre."',".$precio;
		$producto = new Modelo();
		$dato = $producto->insertar("productos", $data);
		header("location:".urlsite);
	}

	// Método editar
	static function editar(){
		$id = $_REQUEST['id'];
		$producto = new Modelo();
		$dato = $producto->mostrar("productos","id=".$id);
		require_once("vista/editar.php");
	}

	// Método actualizar
	static function actualizar(){
		$id = $_REQUEST['id'];
		$nombre= $_REQUEST['nombre'];
		$precio= $_REQUEST['precio'];
		$data="nombre='".$nombre."',precio=".$precio;
		$producto = new Modelo();
		$dato = $producto->actualizar("productos", $data, "id=".$id);
		header("location:".urlsite);
	}


	// Método Eliminar
	static function eliminar(){
		$id = $_REQUEST['id'];
		$producto = new Modelo();
		$dato = $producto->eliminar("productos", "id=".$id);
		header("location:".urlsite);
		}

}