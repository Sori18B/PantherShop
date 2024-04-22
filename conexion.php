<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Página de inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">    <script src="https://kit.fontawesome.com/eeac22f345.js" crossorigin="anonymous"></script>
    <link rel="icon" href="/Imagenes/darkrai.ico">
</head>
<body>
    <nav id="Nav"class="navbar bg-dark navbar-expand-lg border-bottom border-bottom-dark" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Phanter Shop</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="Index.html">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="IniciarSesion.html">Cuenta</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="Carrito.html">Carrito</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Realiza una busqueda" aria-label="Search">
              <button class="btn btn-outline-light" type="submit">Buscar</button>
            </form>
          </div>
        </div>
      </nav> <!--Cierre barra de navegación-->
    </header> <!--Cierre Header-->
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 col-sm-2">
                <div class="card">
                    <div class="card-header">
                        Contenido
                    </div>
                    <div class="card-body">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link active" href="index.html" aria-current="page"><i class="fa-solid fa-house"></i> Inicio</a> 
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="IniciarSesion.html"><i class="fa-solid fa-user"></i> Inicia sesión</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Crearcuenta.html"><i class="fa-solid fa-user-plus"></i> Registrate</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa-solid fa-shop"></i> Productos </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Playeras.html"><i class="fa-solid fa-tag"></i> Playeras </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Shorts.html"><i class="fa-solid fa-tag"></i> Shorts</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Calcetas.html"><i class="fa-solid fa-tag"></i> Calcetas </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Tennis.html"><i class="fa-solid fa-tag"></i> Tennis </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Espinilleras.html"><i class="fa-solid fa-tag"></i> Espinilleras </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Balones.html"><i class="fa-solid fa-tag"></i> Balones </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Uniformes.html"><i class="fa-solid fa-tag"></i> Uniformes </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Promociones.html"><i class="fa-solid fa-tag"></i>  Promociones </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="base.html"><i class="fa-solid fa-tag"></i>  BD </a>
                          </li>
                          
                            <li class="nav-item">
                                <a class="nav-link" href="Productos.html"><i class="fa-solid fa-cart-shopping"></i> Carrito </a>
                            </li>
                        </ul>
                    </div> <!--Div card-body-->
                </div><!--Div card-->
            </div><!--2-Columnas-->

            <div class="col-sm-10">
                <h1 class="p-2 fs-2 text-primary text-center">BASE DE DATOS DE PANTHER SHOP</h1>
                            <p class="fs-5 p-2 border-bottom border-2 text-center" id="eslogan">Consultas de los registrados en la base de datos</p>
                            <br>
                            <div class="card text-center">
                              <div class="card-body">
                                <h4 class="card-title">Consultas y pedidos realizados</h4>
                                <br>
                                <p class="fs-5 p-2 border-bottom border-2 bg-secondary text-white" >Primera consulta</p>

<?php
	// Ejemplo de conexión a base de datos MySQL con PHP.
	//
	// Ejemplo realizado por Oscar Abad Folgueira: http://www.oscarabadfolgueira.com y https://www.dinapyme.com
	
	// Datos de la base de datos
	$usuario = "Administrador";
	$password = "utp0157940";
	$servidor = "localhost";
	$basededatos = "panthershop";
	
	// creación de la conexión a la base de datos con mysql_connect()
	$conexion = mysqli_connect( $servidor, $usuario, "utp0157940" ) or die ("No se ha podido conectar al servidor de Base de datos");
	
	// Selección del a base de datos a utilizar
	$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

	// establecer y realizar consulta. guardamos en variable.
	$consulta = "SELECT * FROM cliente";
	$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	
	// Motrar el resultado de los registro de la base de datos
	// Encabezado de la tabla
    echo "<table class='table'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th scope='col'>Nombre</th>";
    echo "<th>Correo</th>";	
	echo "<th>Contraseña</th>";
echo "<th>Numero</th>";
    echo "</tr>";
    echo "</thead>";
      
      // Bucle while que recorre cada registro y muestra cada campo en la tabla.
      while ($columna = mysqli_fetch_array( $resultado ))
      {
      echo "<tbody>";
          echo "<tr>";
      echo "<td>" . $columna['nombre']. "</td><td>" . $columna['correo'] . "</td>" . "<td>" . $columna['contra'] . "</td><td>" . $columna['telefono']. "</td>";
          echo "</tr>";
      echo "</tbody>";
  
      }
      
      echo "</table>"; // Fin de la tabla

	// cerrar conexión de base de datos
	mysqli_close( $conexion );
?>

<p class="fs-5 p-2 border-bottom border-2 bg-secondary text-white" >Segunda consulta</p>
<?php
	// Ejemplo de conexión a base de datos MySQL con PHP.
	//
	// Ejemplo realizado por Oscar Abad Folgueira: http://www.oscarabadfolgueira.com y https://www.dinapyme.com
	
	// Datos de la base de datos
	$usuario = "Desarrollador";
	$password = "utp0157940";
	$servidor = "localhost";
	$basededatos = "phantershop";
	
	// creación de la conexión a la base de datos con mysql_connect()
	$conexion = mysqli_connect( $servidor, $usuario, "utp0157940" ) or die ("No se ha podido conectar al servidor de Base de datos");
	
	// Selección del a base de datos a utilizar
	$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

	// establecer y realizar consulta. guardamos en variable.
	$consulta = "SELECT cliente.nombre, producto.descripcion from cliente inner join producto on cliente.id_cliente = producto.id_producto inner join pedido on pedido.id_pedido = producto.id_producto where producto.descripcion = 'Camiseta de local del Barcelona FC para la temporada 2023/2024.' or producto.descripcion ='Camiseta de local del Manchester City para la temporada 2023/2024.';";
	$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	
	// Motrar el resultado de los registro de la base de datos
	// Encabezado de la tabla
    echo "<table class='table'>";
    echo "<thead>";
      echo "<tr>";
      echo "<th scope='col'>Nombre</th>";
    echo "<th>Descipcion</th>";
      echo "</tr>";
    echo "</thead>";
      
      // Bucle while que recorre cada registro y muestra cada campo en la tabla.
      while ($columna = mysqli_fetch_array( $resultado ))
      {
      echo "<tbody>";
          echo "<tr>";
      echo "<td>" . $columna['nombre'] . "</td><td>" . $columna['descripcion']. "</td>";
          echo "</tr>";
      echo "</tbody>";
  
      }
      
      echo "</table>"; // Fin de la tabla

	// cerrar conexión de base de datos
	mysqli_close( $conexion );
?>

<p class="fs-5 p-2 border-bottom border-2 bg-secondary text-white" >Primer pedido</p>

<?php
	// Ejemplo de conexión a base de datos MySQL con PHP.
	//
	// Ejemplo realizado por Oscar Abad Folgueira: http://www.oscarabadfolgueira.com y https://www.dinapyme.com
	
	// Datos de la base de datos
	$usuario = "Desarrollador";
	$password = "utp0157940";
	$servidor = "localhost";
	$basededatos = "phantershop";
	
	// creación de la conexión a la base de datos con mysql_connect()
	$conexion = mysqli_connect( $servidor, $usuario, "utp0157940" ) or die ("No se ha podido conectar al servidor de Base de datos");
	
	// Selección del a base de datos a utilizar
	$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

	// establecer y realizar consulta. guardamos en variable.
	$consulta = "SELECT cliente.nombre, producto.descripcion, producto.precio, pedido.cantidad from cliente inner join producto on producto.id_producto = cliente.id_cliente inner join pedido on cliente.id_cliente = pedido.cliente where cliente.id_cliente = 6;";
	$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	
	// Motrar el resultado de los registro de la base de datos
	// Encabezado de la tabla
	echo "<table class='table'>";
  echo "<thead>";
	echo "<tr>";
	echo "<th scope='col'>Nombre</th>";
  echo "<th>Descipcion</th>";
  echo "<th>Precio</th>";
  echo "<th>Cantidad</th>";
	echo "</tr>";
  echo "</thead>";
	
	// Bucle while que recorre cada registro y muestra cada campo en la tabla.
	while ($columna = mysqli_fetch_array( $resultado ))
	{
    echo "<tbody>";
		echo "<tr>";
    echo "<td>" . $columna['nombre'] . "</td><td>" . $columna['descripcion']. "</td><td>" . $columna['precio'] . "</td><td>" . $columna['cantidad']. "</td>";
		echo "</tr>";
    echo "</tbody>";

	}
	
	echo "</table>"; // Fin de la tabla

	// cerrar conexión de base de datos
	mysqli_close( $conexion );
?>

<p class="fs-5 p-2 border-bottom border-2 bg-secondary text-white" >Total a pagar</p>
<?php
	// Ejemplo de conexión a base de datos MySQL con PHP.
	//
	// Ejemplo realizado por Oscar Abad Folgueira: http://www.oscarabadfolgueira.com y https://www.dinapyme.com
	
	// Datos de la base de datos
	$usuario = "Desarrollador";
	$password = "utp0157940";
	$servidor = "localhost";
	$basededatos = "phantershop";
	
	// creación de la conexión a la base de datos con mysql_connect()
	$conexion = mysqli_connect( $servidor, $usuario, "utp0157940" ) or die ("No se ha podido conectar al servidor de Base de datos");
	
	// Selección del a base de datos a utilizar
	$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

	// establecer y realizar consulta. guardamos en variable.
	$consulta = "SELECT sum(pedido.cantidad*producto.precio) as Total from cliente inner join producto on producto.id_producto =  cliente.id_cliente inner join pedido on cliente.id_cliente = pedido.cliente where cliente.id_cliente = 6;";
  
	$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	
	// Motrar el resultado de los registro de la base de datos
	// Encabezado de la tabla
	echo "<table class='table'>";
  echo "<thead>";
	echo "<tr>";
	echo "<th scope='col'>Total</th>";
	echo "</tr>";
  echo "</thead>";
	
	// Bucle while que recorre cada registro y muestra cada campo en la tabla.
	while ($columna = mysqli_fetch_array( $resultado ))
	{
    echo "<tbody>";
		echo "<tr>";
    echo "<td>" . $columna['Total'] . "</td>";
		echo "</tr>";
    echo "</tbody>";

	}
	
	echo "</table>"; // Fin de la tabla

	// cerrar conexión de base de datos
	mysqli_close( $conexion );
?>

<p class="fs-5 p-2 border-bottom border-2 bg-secondary text-white" >Segundo pedido</p>
<?php
	// Ejemplo de conexión a base de datos MySQL con PHP.
	//
	// Ejemplo realizado por Oscar Abad Folgueira: http://www.oscarabadfolgueira.com y https://www.dinapyme.com
	
	// Datos de la base de datos
	$usuario = "Desarrollador";
	$password = "utp0157940";
	$servidor = "localhost";
	$basededatos = "phantershop";
	
	// creación de la conexión a la base de datos con mysql_connect()
	$conexion = mysqli_connect( $servidor, $usuario, "utp0157940" ) or die ("No se ha podido conectar al servidor de Base de datos");
	
	// Selección del a base de datos a utilizar
	$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

	// establecer y realizar consulta. guardamos en variable.
	$consulta = "SELECT producto.precio, producto.descripcion, cliente.nombre, pedido.cantidad   from cliente
    inner join producto
    on producto.id_producto = cliente.id_cliente
    inner join pedido
    on cliente.id_cliente = pedido.cliente
    where cliente.id_cliente = 12
    group by cliente.nombre, producto.descripcion, producto.precio, pedido.cantidad;";
  
	$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	
	// Motrar el resultado de los registro de la base de datos
	// Encabezado de la tabla
	echo "<table class='table'>";
  echo "<thead>";
	echo "<tr>";
    echo "<th scope='col'>Nombre</th>";
    echo "<th scope='col'>Descripcion</th>";
	echo "<th scope='col'>Precio</th>";
    echo "<th scope='col'>Cantidad</th>";
	echo "</tr>";
  echo "</thead>";
	
	// Bucle while que recorre cada registro y muestra cada campo en la tabla.
	while ($columna = mysqli_fetch_array( $resultado ))
	{
    echo "<tbody>";
		echo "<tr>";
        echo "<td>" . $columna['nombre'] . "</td>" . "<td>" . $columna['descripcion'] . "</td>" . "<td>" . $columna['precio'] . "</td>" . "<td>" . $columna['cantidad'] . "</td>";
		echo "</tr>";
    echo "</tbody>";

	}
	
	echo "</table>"; // Fin de la tabla

	// cerrar conexión de base de datos
	mysqli_close( $conexion );
?>

<p class="fs-5 p-2 border-bottom border-2 bg-secondary text-white" >Total a pagar</p>
<?php
	// Ejemplo de conexión a base de datos MySQL con PHP.
	//
	// Ejemplo realizado por Oscar Abad Folgueira: http://www.oscarabadfolgueira.com y https://www.dinapyme.com
	
	// Datos de la base de datos
	$usuario = "Desarrollador";
	$password = "utp0157940";
	$servidor = "localhost";
	$basededatos = "phantershop";
	
	// creación de la conexión a la base de datos con mysql_connect()
	$conexion = mysqli_connect( $servidor, $usuario, "utp0157940" ) or die ("No se ha podido conectar al servidor de Base de datos");
	
	// Selección del a base de datos a utilizar
	$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

	// establecer y realizar consulta. guardamos en variable.
	$consulta = "SELECT sum(pedido.cantidad*producto.precio) as Total from cliente inner join producto on producto.id_producto = cliente.id_cliente inner join pedido on cliente.id_cliente = pedido.cliente where cliente.id_cliente = 12;";
  
	$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	
	// Motrar el resultado de los registro de la base de datos
	// Encabezado de la tabla
	echo "<table class='table'>";
  echo "<thead>";
	echo "<tr>";
	echo "<th scope='col'>Total</th>";
	echo "</tr>";
  echo "</thead>";
	
	// Bucle while que recorre cada registro y muestra cada campo en la tabla.
	while ($columna = mysqli_fetch_array( $resultado ))
	{
    echo "<tbody>";
		echo "<tr>";
    echo "<td>" . $columna['Total'] . "</td>";
		echo "</tr>";
    echo "</tbody>";

	}
	
	echo "</table>"; // Fin de la tabla

	// cerrar conexión de base de datos
	mysqli_close( $conexion );
?>

<p class="fs-5 p-2 border-bottom border-2 bg-secondary text-white" >Tercer pedido</p>

<?php
	// Ejemplo de conexión a base de datos MySQL con PHP.
	//
	// Ejemplo realizado por Oscar Abad Folgueira: http://www.oscarabadfolgueira.com y https://www.dinapyme.com
	
	// Datos de la base de datos
	$usuario = "Desarrollador";
	$password = "utp0157940";
	$servidor = "localhost";
	$basededatos = "phantershop";
	
	// creación de la conexión a la base de datos con mysql_connect()
	$conexion = mysqli_connect( $servidor, $usuario, "utp0157940" ) or die ("No se ha podido conectar al servidor de Base de datos");
	
	// Selección del a base de datos a utilizar
	$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

	// establecer y realizar consulta. guardamos en variable.
    $consulta = "SELECT cliente.nombre, producto.descripcion, producto.precio, pedido.cantidad from cliente inner join producto on producto.id_producto = cliente.id_cliente  inner join pedido on cliente.id_cliente = pedido.cliente where producto.descripcion = 'Camiseta de local del Manchester United para la temporada 2023/2024.';";
  
	$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	
	// Motrar el resultado de los registro de la base de datos
	// Encabezado de la tabla
	echo "<table class='table'>";
  echo "<thead>";
	echo "<tr>";
    echo "<th scope='col'>Nombre</th>";
    echo "<th scope='col'>Descripcion</th>";
	echo "<th scope='col'>Precio</th>";
    echo "<th scope='col'>Cantidad</th>";
	echo "</tr>";
  echo "</thead>";
	
	// Bucle while que recorre cada registro y muestra cada campo en la tabla.
	while ($columna = mysqli_fetch_array( $resultado ))
	{
    echo "<tbody>";
		echo "<tr>";
        echo "<td>" . $columna['nombre'] . "</td>" . "<td>" . $columna['descripcion'] . "</td>" . "<td>" . $columna['precio'] . "</td>" . "<td>" . $columna['cantidad'] . "</td>";
		echo "</tr>";
    echo "</tbody>";

	}
	
	echo "</table>"; // Fin de la tabla

	// cerrar conexión de base de datos
	mysqli_close( $conexion );
?>


<p class="fs-5 p-2 border-bottom border-2 bg-secondary text-white" >Total a pagar</p>
<?php
	// Ejemplo de conexión a base de datos MySQL con PHP.
	//
	// Ejemplo realizado por Oscar Abad Folgueira: http://www.oscarabadfolgueira.com y https://www.dinapyme.com
	
	// Datos de la base de datos
	$usuario = "Desarrollador";
	$password = "utp0157940";
	$servidor = "localhost";
	$basededatos = "phantershop";
	
	// creación de la conexión a la base de datos con mysql_connect()
	$conexion = mysqli_connect( $servidor, $usuario, "utp0157940" ) or die ("No se ha podido conectar al servidor de Base de datos");
	
	// Selección del a base de datos a utilizar
	$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

	// establecer y realizar consulta. guardamos en variable.
	$consulta = "SELECT sum(pedido.cantidad * producto.precio) as Total from pedido inner join producto on pedido.id_pedido = producto.id_producto inner join cliente on pedido.id_pedido = cliente.id_cliente where producto.descripcion = 'Camiseta de local del Manchester United para la temporada 2023/2024.' group by pedido.cliente;";
  
	$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	
	// Motrar el resultado de los registro de la base de datos
	// Encabezado de la tabla
	echo "<table class='table'>";
  echo "<thead>";
	echo "<tr>";
	echo "<th scope='col'>Total</th>";
	echo "</tr>";
  echo "</thead>";
	
	// Bucle while que recorre cada registro y muestra cada campo en la tabla.
	while ($columna = mysqli_fetch_array( $resultado ))
	{
    echo "<tbody>";
		echo "<tr>";
    echo "<td>" . $columna['Total'] . "</td>";
		echo "</tr>";
    echo "</tbody>";

	}
	
	echo "</table>"; // Fin de la tabla

	// cerrar conexión de base de datos
	mysqli_close( $conexion );
?>
                              </div>
                            </div>


            </div><!--10-Columnas-->
        </div><!--Cierre row 1-->
    </div> <!--Cierre "container"-->

    <br>
    <div class="container-fluid">
      <footer class="pie-pagina">
        <div class="grupo-1 text-center">
          <div class="box">
              <figure>
                  <a href="#">
                      <img src="/Imagenes/Logo.png" alt="Logo">
                  </a>
              </figure>
          </div>
          <div class="box">
              <h2>Información sobre nosotros</h2>
              <p>Somos una empresa 100% Mexicana dedicada a la venta de articulos deportivos, buscamos
                la más alta calidad en los uniformes que elaboramos para garantizar el mayor rendimiento de tus deportistas </p>
                <br><br>
                <h2>Comentarios y sugerencias</h2>
                <a class="" href="" Target="_blank" role="button" id="sugerencias"><i class="fa-regular fa-mailbox"></i></i> atencion@phanthershop.com.mx</a><br>

          </div>
          <div class="box">
              <h2>Visíta nuestras redes sociales</h2>
              <div class=" red-social">
                <a class="" href="" Target="_blank" role="button"><i class="fa-brands fa-square-facebook"></i> Facebook</a><br>
                <a class="" href="" Target="_blank" role="button"><i class="fa-brands fa-instagram"></i></i> Instagram</a><br>
                <br>
              <h2>Contáctanos por WhatsApp</h2>
              <a class="" href="" Target="_blank" role="button"><i class="fa fa-whatsapp"></i></i> 2212847943</a><br>
              
          </div>
          </div>
        </div>
        <div class="grupo-2">
          <small>&copy; 2023 <b>Panther Shop</b> - Todos los derechos reservados</small> 
        </div>
        <style>
          .pie-pagina{
             width: 100%;
             background-color: #121314;
             }
             .pie-pagina .grupo-1{
          width: 100%;
          max-width: 120%;
          margin:auto;
          display: grid;
          grid-template-columns: repeat(3, 1fr);
          grid-gap: 50px;
           padding: 30px 0px;
           }
    
        .pie-pagina .grupo-1 .box figure{
           width: 100%;
           height: 100%;
           display: flex;
           justify-content: center;
           align-items: center;
           }
             .pie-pagina .grupo-1 .box figure img {
        width: 250px;
        }
        .pie-pagina .grupo-1 .box h2{
            color: #fff;
              margin-bottom: 25px;
             font-size: 16px;
        }
        .pie-pagina .grupo-1 .box p{
            color: #efefef;
              margin-bottom: 10px;
             
        }
        .pie-pagina .grupo-1 .red-social a{
          display: inline-block;
          text-decoration: none;
          width: 45 px;
          height: 45px;
          line-height: 45px;
          color: #fff;
          margin-right: 10px;
          text-align: center;
          transition: all 300ms ease;
        }
        .pie-pagina .grupo-1 .red-social a:hover{
          color: rgb(120, 91, 144);
        }
        .pie-pagina .grupo-2 {
          background-color: rgb(12, 12, 12);
          padding: 15px 10px;
          text-align: center;
          color: #fff;
        }
        #sugerencias{
            text-decoration: none;
            color: white;
        }
        </style>
      </footer> <!--Cierre footer-->
    </div>


<script src="/bootstrap-5.3.0-dist/js/bootstrap.min.js"></script>
</body>
</html>
