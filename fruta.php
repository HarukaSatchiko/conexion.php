<?php

	class Fruta {
		//Propiedades
		public $nombre;
		public $color;

		//Metodo constructor
		function __construct($nombre, $color){
			$this->nombre=$nombre;
			$this->color=$color;
		}
		//Metodos
		function set_nombre($nombre){
			$this->nombre = $nombre;
		}

		function get_nombre(){
			return $this->nombre;
		}
	}
?>