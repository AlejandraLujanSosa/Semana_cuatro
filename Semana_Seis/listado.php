

<!DOCTYPE html>
<html>
<body>

 

<h2>An Ordered HTML Listadeusuario</h2>

<ol>
<?php
$miArchivo = fopen("usuarios.txt", "r");
while(!feof($miArchivo)) {
  $objeto =json_decode(fgets($miArchivo));
  if($objeto-> ==$_GET[`nombre`])
  {}
  echo "<li>".$objeto->nombre."</li>";
}
fclose($miArchivo);
?>


  
</ol> 

</body>
</html>