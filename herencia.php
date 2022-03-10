<?php

include "fruta.php";

class Tropical extends Fruta {
	public function mensaje(){
		echo "El nombre de esta fruta es: ";
	}
}

$mandarina = new Tropical("Mandarina", "naranja");

$mandarina->mensaje();
echo $mandarina->nombre;