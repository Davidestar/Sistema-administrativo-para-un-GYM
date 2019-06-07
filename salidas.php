<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>INICIO</title>

<link rel="stylesheet" type="text/css" href="cabeza.css">

<link rel="stylesheet" type="text/css" href="estilos.css">

<link rel="stylesheet" type="text/css" href="enca.css">

</head>
<body style="background-color:#0000;">
   <CENTER>
    <div id="block1">
 
<h1> "Tu registro del dia de hoy"</h1>
<h3> "No pain, No gain" Davidownosky </h3>
 
<p>
 
<a href="cliente.html" class="">Salir</a>|
 
</p>
 
</div>
    

</CENTER>
<CENTER>
<?php

$usuario="root"; 
$contrasena="";
$servidor="localhost";
$Basededatos="gym";



$HORA=$_POST['b'];
$NOMBRE=$_POST['c'];



   
   echo'<table border="7">';
   echo'<tr>';
   echo '<th>HORA</th>';
   echo '<th>NOMBRE</th>';
   echo '<th></th>';
   echo'</tr>';
   
   echo'<tr>';
   echo'<td>'.$HORA.'</td>';
   echo'<td>'.$NOMBRE.'</td>';
   echo'</tr>';

    
$Conn=mysqli_connect($servidor, $usuario, $contrasena);
mysqli_select_db ($Conn, $Basededatos) or die ("Ninguna DB seleccionada");
http://localhost/phpmyadmin/sql.php?db=gym&table=registro&pos=0

$SQL= " INSERT INTO Salida (Hora,Nombre,) VALUES ('$HORA', '$NOMBRE',)";
echo "Registro con exito";
mysqli_query($Conn,$SQL);

mysqli_close($Conn);
 ?>
 </CENTER>
</body>
</html>
 