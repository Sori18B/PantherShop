<?php
$mysqli = new mysqli("localhost", "Administrador", "utp0157940", "panthershop");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar con MySQL: " . $mysqli->connect_error . $mysqli->connect_errno;
}
 
$Correo=$_REQUEST['txtCorreo'];
$Contrasena= $_REQUEST['txtContraseña'];
 
$query="SELECT * FROM cliente WHERE correo = '$Correo' AND contra = '$Contrasena'";
$sql = mysqli_query($mysqli,$query);
 
//$row = mysqli_fetch_array($sql);
 
if(mysqli_num_rows($sql)!=1)
{
    echo '<script language="javascript">alert("El Usuario/Contraseña no es correcto,intente de nuevo");</script>';	
    header('Location:IniciarSesion.html');
    echo '<script language="javascript">alert("El Usuario/Contraseña no es correcto,intente de nuevo");</script>';
}
else
{
    header('Location:Index.html');
}
?>

