<?php

require_once "vendor/autoload.php";

use php_dio\DigitalCep\Search;

$busca = new Search;

$resultado = $busca->getAdressFromZipcode('88010301');

print_r($resultado);