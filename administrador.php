<?php
include_once "estacionamiento.php";


$auto = new VEHICULO("ABC 123");
$auto2 = new VEHICULO("AAA 123");
$auto3 = new VEHICULO("BBB 123");
$auto4 = new VEHICULO("CCC 123");
$auto5 = new VEHICULO("DDD 123");

$accion = "GUARDAR";

if($accion == "GUARDAR")
{

ESTACIONAMIENTO::guardar($auto);
ESTACIONAMIENTO::guardar($auto2);
ESTACIONAMIENTO::guardar($auto3);
ESTACIONAMIENTO::guardar($auto4);
ESTACIONAMIENTO::guardar($auto5);

}else
{

}

?>