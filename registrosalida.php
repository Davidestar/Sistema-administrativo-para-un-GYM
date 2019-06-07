<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>INICIO</title>

<link rel="stylesheet" type="text/css" href="CAB2.css">
<link rel="stylesheet" type="text/css" href="cuadro.css">
<link rel="stylesheet" type="text/css" href="fib.css">

<link rel="stylesheet" type="text/css" href="carusel.css">

</head>
<body style="background-color:#0000;">
   <CENTER>
    <div id="block1">
 
<h1> Bienvenido analista </h1>
<h3> "No pain, No gain" Davidownosky </h3>
 
<p>

 
<a href="admin.html" class="">Inicio</a>|

<a href="clientes.html" class="">Clientes</a>|
 
<a href="" class="cat">Nuevo registros</a>|

 
</p>
 
</div>
    

</CENTER>


</div>
</center>
<center>
	<h2>Resgistros de salidas</h2>
<?php
$server="localhost";
$usuario="root";
$contrasena="";
$bd="gym";

$conexion=mysqli_connect($server, $usuario, $contrasena, $bd) or die ("error al conectar");

$consulta=mysqli_query($conexion,"SELECT * FROM salida")
or die ("error al traer datos");

echo'<table border="8">';
echo'<tr>';
echo '<th>FECHA</th>';
echo '<th>NOMBRE</th>';
echo '<th></th>';
echo'</tr>';

while($extraido=mysqli_fetch_array($consulta)){
echo'<tr>';
echo'<td>'.$extraido['Hora'].'</td>';
echo'<td>'.$extraido['Nombre'].'</td>';
echo'</tr>';
}

mysqli_close($conexion);
echo'</table>';
?>

</center>
        <center> 
<img src="gym2.png" align="center" 
     width="150"
     height="150">

          <center>


 <form action="eliminar.php" method="POST">
   <br><br>

<input type="text" name="delete">
<input type="submit" value="eliminar" name="eliminar">

 </CENTER> 
 
</body>
</html>
 
