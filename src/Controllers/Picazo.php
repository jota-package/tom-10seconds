<?php 

namespace Fedatario\Controllers;

Trait Picazo {
	static public $respuesta = "No se quien soy\n";

	static public function responder($mensaje = ""){
		return self::$respuesta;
	}

	static public function pedir_consejo($mensaje = ""){
		return self::$respuesta.".";
	}
}