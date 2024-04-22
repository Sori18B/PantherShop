<?php

        $ID_PRODUCTO=$_POST["id_producto"];
        $PRECIO=$_POST["precio"];
        $NOMBRE=$_POST["nombre_del_equipo"];
        $des=$_POST["descripcion"];
        $talla = $_POST["talla"];

        $link=mysqli_connect("localhost","Administrador","utp0157940") or die('no se pudo conectar: ' . mysqli_error());
        echo "";
        $db= mysqli_select_db($link,"producto") or die ("no se puedo seleccionar la base de datos" . mysqli_error());
        $query="INSERT INTO producto (id_producto, precio, nombre_del_equipo, descripcion, talla, '') values ('$ID_PRODUCTO', '$PRECIO', '$NOMBRE','$des', '$talla')";
        $results= mysqli_query($link, $query) or die ("no se realizo la incersion" . mysqli_error());
        echo ".\n";
?>