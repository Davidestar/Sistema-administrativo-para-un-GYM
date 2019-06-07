<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>INICIO</title>

<link rel="stylesheet" type="text/css" href="CAB2.css">

<link rel="stylesheet" type="text/css" href="estilos.css">



</head>
<body >
   <CENTER>
    <div id="block1">
 
<h1> "Pagos registrados"</h1>
<h3> "No pain, No gain" Davidownosky </h3>
 
<p>
 
<a href="admin.html" class="">Inicio</a>|

<a href="registronuevos.html" class="">Resgistros</a>|

<a href="pagos.html" class="">Pagos</a>|
 
</p>
 
</div>
    

</CENTER>
<CENTER>
<?php

$usuario="root"; 
$contrasena="";
$servidor="localhost";
$Basededatos="gym";


$FECHA=$_POST['a'];
$USUARIO=$_POST['b'];
$MES=$_POST['c'];



   
   echo'<table border="7">';
   echo'<tr>';
   echo '<th>FECHA</th>';
   echo '<th>USUARIO</th>';
   echo '<th>MES</th>';
   echo '<th></th>';
   echo'</tr>';
   
   echo'<tr>';
   echo'<td>'.$FECHA.'</td>';
   echo'<td>'.$USUARIO.'</td>';
   echo'<td>'.$MES.'</td>';
   echo'</tr>';

    
$Conn=mysqli_connect($servidor, $usuario, $contrasena);
mysqli_select_db ($Conn, $Basededatos) or die ("Ninguna DB seleccionada");
http://localhost/phpmyadmin/sql.php?db=gym&table=registro&pos=0

$SQL= " INSERT INTO pagos (Fecha,Usuario,Mes) VALUES ('$FECHA', '$USUARIO', '$MES')";
echo "Registro con exito";
mysqli_query($Conn,$SQL);

mysqli_close($Conn);
 ?>
 </CENTER>
</body>
</html>
 