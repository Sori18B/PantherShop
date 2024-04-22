 <?php

$ID = $_POST["id_producto"];

$link = mysqli_connect("localhost", "Administrador", "utp0157940") or die('No se pudo conectar: ' . mysqli_error());
echo "Connected successfully";

$db = mysqli_select_db($link, "panthershop") or die("No se pudo seleccionar la base de datos" . mysqli_error());

$query = "DELETE FROM carrito";
$result = mysqli_query($link, $query) or die("No se pudo realizar la eliminación" . mysqli_error());

if ($result) {
    echo "Se realizó satisfactoriamente la eliminación de datos.\n";
    header("Location: carrito.php");
    exit;
} else {
    echo "Ocurrió un error al eliminar los datos.";
}

mysqli_close($link);
?>
