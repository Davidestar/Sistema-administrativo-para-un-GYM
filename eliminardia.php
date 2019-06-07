
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>INICIO</title>



<link rel="stylesheet" type="text/css" href="estilos.css">
<link rel="stylesheet" type="text/css" href="CAB2.css">

</head>
<body style="background-color:#0000;">
   <CENTER>
    <div id="block1">
 
<h1> "Tu registro del dia de hoy"</h1>
<h3> "No pain, No gain" Davidownosky </h3>
 
<p>
 
<a href="salida.html" class="">Salida</a>|
 
</p>
 
</div>
    

</CENTER>
<CENTER>
	
<?php
$server="localhost";
$ususario="root";
$contrasena="";
$db="gym";

$conexion=mysql_connect($server,$ususario,$contrasena,$db) or die ("error al conectar");

$borraresto=$_GET['Nombre'];

$consulta=mysqli_query($conexion,"DELETE FROM registros WHERE Nombre='$borraresto'")
or die ("error al traer datos");
mysql_close($conexion);
 ?>
 
 </CENTER>
</body>
</html>
 