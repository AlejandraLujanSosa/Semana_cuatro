<?php
//var_dump($_GET);
Echo "Su nombre es".$_GET['nombre'];
$archivo=fopen('usuarios.txt','a');
fwrite($archivo, $_GET['nombre'])."\n";

?>