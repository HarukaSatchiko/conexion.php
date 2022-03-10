<?php

include "fruta.php";

class Tropical extends Fruta {
	public $peso;
	public function __construct($nombre, $color, $peso){
		$this->nombre = $nombre;
		$this->color = $color;
		$this->peso = $peso;
	}
	public function sobreescribir_en_tropical(){
		echo "Ya esta sobre escrito: {$this->nombre}, {$this->color}, {$this->peso}";
	}
}

$banano = new Fruta ("Banano","Amarillo");
$banano->sobreescribir_en_tropical();

$limon = new Tropical("Limon", "Verde", "40gr");
$limon->sobreescribir_en_tropical();