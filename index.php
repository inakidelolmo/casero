<?php
require_once ("persona.php");

$pedro = new Persona();
//$pedro->setNombre("Juan");
echo $pedro->nombre;
$pedro->setNombre("Juas");
echo $pedro->nombre;
$cake=str_replace("J","k",$pedro->nombre);
echo $cake;
