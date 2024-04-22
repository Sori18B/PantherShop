<?php
// actualizar_cliente.php

// Conexión a la base de datos (ajusta los valores según tu configuración)
$servername = "localhost";
$username = "Administrador";
$password = "utp0157940";
$dbname = "panthershop";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener los datos del formulario

if ($_SERVER["REQUEST_METHOD"] == "POST") {  
    $cliente_id = $_POST['cliente_id'];
    $telefono = $_POST['telefono'];
    $Contra = $_POST['Contraseña'];
    $email = $_POST['email'];
}

// Actualizar los datos en la base de datos
$sql = "UPDATE cliente SET telefono='$telefono', contra='$Contra', correo='$email' WHERE id_cliente='$cliente_id'";

if ($conn->query($sql) === TRUE) {
    echo "Cliente actualizado exitosamente.";
    // Redirigir a la página Admin.php después de mostrar el mensaje
    header("Location: Admin.php");
    exit(); // Asegurarse de que el script se detenga después de la redirección
} else {
    echo "Error al actualizar el cliente: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
