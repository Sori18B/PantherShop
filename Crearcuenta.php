
<?php
$mysqli = new mysqli("localhost", "Administrador", "utp0157940", "panthershop");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar con MySQL: " . $mysqli->connect_error . $mysqli->connect_errno;
}

$elnombre = $_POST["txtNombre"];
$tel = $_POST["Tel"];
$contra = $_POST["txtContraseña"];
$correo = $_POST["txtCorreo"];

// Corregir la consulta de inserción
$sql = "INSERT INTO cliente ( nombre, telefono, direccion, forma_de_pago, f_nacimiento, contra, correo) 
        VALUES ('$elnombre', '$tel', '', '', '', '$contra', '$correo')";

if (!$mysqli->query($sql)) {
    echo "Fallo la creación de la tabla" . $mysqli->errno . $mysqli->error;
}
else{
    header('Location:IniciarSesion.html');
}
?>
