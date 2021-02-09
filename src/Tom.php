<?php 

namespace Tom;

class Tom {
	static public $respuesta = "Hola, soy Tom";

	static public function responder($mensaje = ""){
		return self::$respuesta;
	}
}