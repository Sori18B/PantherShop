<?php
$link = mysqli_connect("localhost", "Administrador", "utp0157940", "panthershop") or die('No se pudo conectar: ' . mysqli_error());

$db_selected = mysqli_select_db($link, "panthershop");

if (!$db_selected) {
    die ("No se pudo seleccionar la base de datos" . mysqli_error());
}

$query = "SELECT * FROM producto where id_producto=31";
$results = mysqli_query($link, $query) or die("Error en la consulta: " . mysqli_error());

if (mysqli_num_rows($results) > 0) {
    while ($row = mysqli_fetch_assoc($results)) {
        $ID_PRODUCTO = $row["id_producto"];
        $NOMBRE = $row["nombre_del_equipo"];
        $des = $row["descripcion"];
        $PRECIO = $row["precio"];

        // Insertar los datos en la tabla "carrito"
        $insert_query = "INSERT INTO carrito (id_producto, nombre_del_equipo, descripcion, precio) VALUES ('$ID_PRODUCTO', '$NOMBRE', '$des', '$PRECIO')";
        $insert_result = mysqli_query($link, $insert_query);

        if ($insert_result) {
            echo "Se insertaron los datos en la tabla carrito correctamente.<br>";
        } else {
            echo "Error al insertar datos en la tabla carrito: " . mysqli_error($link) . "<br>";
        }
    }
} else {
    echo "No se encontraron resultados en la tabla productos.";
}

mysqli_close($link);

// Redirigir a la página "Playeras.html"
header("Location:Calcetas.html");
exit();
?>