<?php 

namespace Fedatario\Models;
use App;

Trait Lucy {
	static public $respuesta = "No hay nada como el primer beso.\n";

	static public function responder($mensaje = ""){
		return self::$respuesta;
	}

	static public function pedir_consejo($mensaje = ""){
		return self::$respuesta.".";
	}

	/**
     * Retorna un mensaje de verdadero
     */
    public function ejecucion_limpia(Request $request){
    	return App\User::persona_lista();
    	//return self::responder("hola");
    }
}