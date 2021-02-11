<?php 

namespace Lucy;

trait Lucy {
	static public $respuesta = "No hay nada como el primer beso.";

	static public function responder($mensaje = ""){
		return self::$respuesta;
	}

	static public function pedir_consejo($mensaje = ""){
		return self::$respuesta.".";
	}
}