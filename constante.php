<?php

class Chao {
	const DEJANDO_MENSAJE = "Voy a ir a comer pizza";

	public function chaito(){
		echo self::DEJANDO_MENSAJE;
	}

}
echo Chao::DEJANDO_MENSAJE;

$despedida = new Chao();
$despedida->chaito();