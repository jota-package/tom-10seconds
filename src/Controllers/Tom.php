<?php 

namespace Fedatario\Controllers;

Trait Tom {
	static public $respuesta = "Hola, soy Tom\n";

	static public function responder($mensaje = ""){
		return self::$respuesta;
	}

	static public function pedir_consejo($mensaje = ""){
		return self::$respuesta.".";
	}
}