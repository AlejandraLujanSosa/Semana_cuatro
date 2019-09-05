<?php
//var_dump($_GET);
Echo "Su nombre es".$_GET['nombre'];


$miobjeto=new stdClass();
$miobjeto->nombre="alfredo";
$miobjeto->apellido="mercurio";

//var_dump(json_encode($miobjeto));
$archivo=fopen('usuarios.txt','a');
fwrite($archivo, json_encode($miobjeto));
fclose($archivo);



?>