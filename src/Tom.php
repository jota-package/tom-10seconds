<?php 

namespace Tom;

class Tom {
	static public $respuesta = "Hola, soy Tom";

	static public responder($mensaje = ""){
		return self::$respuesta;
	}
}