<?php

class saludo {

	public static $pi = 3.14159;

	public static function bienvenida(){
		echo "Hola mundo";
	}

	public function __construct(){
		self::bienvenida();
	}
}

//Llamamos al metodo estatico
//saludo::bienvenida();
// otra forma de llamar metodos estaticos
//new saludo();

//Llamar propiedades estaticas
//echo saludo::$pi;

class valor extends saludo {
	public function estatica(){
		return parent::$pi;
	}
}

$x = new valor();
echo $x->estatica();