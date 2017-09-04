<?php
 class VEHICULO
{
 private $_patente;

 public function VEHICULO($patente)
 {
     $this->_patente = $patente;
 }
 public function getpatente()
 {
     return $this->_patente;
 }
}   
?>