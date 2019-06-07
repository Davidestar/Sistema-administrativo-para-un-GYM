<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>INICIO</title>

<link rel="stylesheet" type="text/css" href="cabeza.css">
<link rel="stylesheet" type="text/css" href="cuadro.css">
<link rel="stylesheet" type="text/css" href="fib.css">
<link rel="stylesheet" type="text/css" href="enca.css">
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

<?php
$server="localhost";
$usuario="root";
$contrasena="";
$bd="gym";

$conexion=mysqli_connect($server, $usuario, $contrasena, $bd) or die ("error al conectar");

$consulta=mysqli_query($conexion,"SELECT * FROM nuevos")
or die ("error al traer datos");

echo'<table border="10">';
echo'<tr>';
echo '<th>FECHA</th>';
echo '<th>HORA</th>';
echo '<th>NOMBRE</th>';
echo '<th>APELLIDO</th>';
echo '<th>MES</th>';
echo '<th>EDAD</th>';
echo '<th>ENFERMEDAD</th>';
echo '<th>SEXO</th>';
echo '<th></th>';
echo'</tr>';

while($extraido=mysqli_fetch_array($consulta)){
echo'<tr>';
echo'<td>'.$extraido['Fecha'].'</td>';
echo'<td>'.$extraido['Hora'].'</td>';
echo'<td>'.$extraido['Nombre'].'</td>';
echo'<td>'.$extraido['Apellido'].'</td>';
echo'<td>'.$extraido['Mes'].'</td>';
echo'<td>'.$extraido['Edad'].'</td>';
echo'<td>'.$extraido['Enfermedad'].'</td>';
echo'<td>'.$extraido['Sexo'].'</td>';
echo'</tr>';
}

mysqli_close($conexion);
echo'</table>';
?>


        <center> 
<img src="gym2.png" align="center" 
     width="150"
     height="150">

          <center> 
 
</body>
</html>
 
