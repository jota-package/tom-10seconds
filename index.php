<?php

use Fedatario\Controllers\Tom; 

require_once realpath("vendor/autoload.php");

Class Testo {
	use Tom;
}

echo Testo::responder("Hola");