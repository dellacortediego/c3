<?php
include_once "estacionamiento.php";

$patente = $_POST['patente'];
$accion = $_POST['estacionar'];

$auto = new VEHICULO("ABC 123");
$auto2 = new VEHICULO("AAA 123");
$auto3 = new VEHICULO("BBB 123");
$auto4 = new VEHICULO("CCC 123");
$auto5 = new VEHICULO("DDD 123");



if($accion == "Guardar")
{

echo "Estoy guardo";

}else
{
echo "Estoy saco";
}


//var_dump($_POST);

//echo "Hola http";




?>