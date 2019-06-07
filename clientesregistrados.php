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

$usuario="root"; 
$contrasena="";
$servidor="localhost";
$Basededatos="gym";


$FECHA=$_POST['a'];
$NOMBRE=$_POST['b'];
$APELLIDO=$_POST['c'];
$MES=$_POST['d'];
$EDAD=$_POST['e'];
$ENFERMEDAD=$_POST['e'];
$SEXO=$_POST['e'];


   
   echo'<table border="7">';
   echo'<tr>';
   echo '<th>FECHA</th>';
   echo '<th>NOMBRE</th>';
   echo '<th>APELLIDO</th>';
   echo '<th>MES</th>';
   echo '<th>EDAD</th>';
   echo '<th>ENFERMEDAD</th>';
   echo '<th>SEXO</th>';
   echo '<th></th>';
   echo'</tr>';
   
   echo'<tr>';
   echo'<td>'.$FECHA.'</td>';
   echo'<td>'.$NOMBRE.'</td>';
   echo'<td>'.$APELLIDO.'</td>';
   echo'<td>'.$MES.'</td>';
   echo'<td>'.$EDAD.'</td>';
   echo'<td>'.$ENFERMEDAD.'</td>';
   echo'<td>'.$SEXO.'</td>';
   echo'</tr>';

    
$Conn=mysqli_connect($servidor, $usuario, $contrasena);
mysqli_select_db ($Conn, $Basededatos) or die ("Ninguna DB seleccionada");
http://localhost/phpmyadmin/sql.php?db=gym&table=registro&pos=0

$SQL= " INSERT INTO nuevos (Fecha,Nombre,Apellido,Mes,Edad,Enfermedad,Sexo) VALUES ('$FECHA', '$NOMBRE', '$APELLIDO', '$MES', '$EDAD', '$ENFERMEDAD', '$SEXO')";
echo "Registro con exito";
mysqli_query($Conn,$SQL);

mysqli_close($Conn);
 ?>

 <form action="eliminar.php" method="POST">
   <br><br>

<input type="text" name="delete">
<input type="submit" value="eliminar" name="eliminar">

 </CENTER>
</body>
</html>
 