<?php
include_once "vehiculo.php";

class ESTACIONAMIENTO
{
    public function guardar($auto)
    {
        echo "Estoy guardando";
        $archivo = fopen ("Archivos/Estacionamiento.txt","a");
        $ahora = date("Y-m-d H:i:s");
        fwrite($archivo,$auto->getpatente()."-".$ahora."\r\n");
        fclose($archivo);
        
    }
    public function sacar($auto)
    {
        echo "estoy sacando";
        $ahora = date("Y-m-d H:i:s");
        $txt = "Archivos/Estacionamiento.txt";
        $archivo = fopen ("Archivos/Estacionamiento.txt","r");
        echo  fread($archivo,filesize($txt));
        fclose($archivo);
    }
}
?>