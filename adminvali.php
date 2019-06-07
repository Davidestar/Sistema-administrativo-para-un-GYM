<?php

$Correo=$_POST['userreg'];
$Contrasena=$_POST['pwreg'];


//Conexion

$conn=mysqli_connect("localhost","root","","login");
$contrasena1=password_verify($Contrasena,$Contrasena);
$consulta="SELECT * FROM admin WHERE username='$Correo' and password='$Contrasena'"; //Variables de tus base de datos
$rel=mysqli_query($conn,$consulta);

$fi= mysqli_num_rows($rel);
if ($fi>0){
  header("location:adminis.html");//Tu pagina
}
else{
  header("location: cliente.html?fallo=true");//Tu otra pagina si no se encuentrar
  echo "vuelve a intentarlo";

}

mysqli_free_result($rel);
mysqli_close($conn);

?>
