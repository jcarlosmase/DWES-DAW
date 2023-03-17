<?php
require_once "vehiculo.php";
require_once "coche.php";
$v = new vehiculo("1111AAA","Ford","Focus","Negro",12000);
$v->conducir();
echo $v;
$v->loQuesea("uno",2,true);
$c = new coche("2222BBB","Seat","Ibiza","Rojo",13500);
$c->conducir();
$c->setMarca("Opel");
echo $c;
?>