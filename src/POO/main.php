<?php
include("Vehiculo.php");

$vehiculo1 = new Vehiculo(4,"mazda","2c","rojo");

echo $vehiculo1->__getRuedas();

$vehiculo1->__setRuedas(5);

echo $vehiculo1->__getRuedas();
?>