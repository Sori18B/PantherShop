<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Carrito de compras</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">    <link rel="stylesheet" href="Poppins.css">
    <link href="Poppins.css">; 
    <script src="https://kit.fontawesome.com/eeac22f345.js" crossorigin="anonymous"></script>
    <link rel="icon" href="/Imagenes/darkrai.ico">
</head>
<body>
    <header>
        <nav id="Nav" class="navbar body-dark navbar-expand-lg border-bottom border-bottom-dark" data-bs-theme="dark">
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
            <div class="col-sm-2 col-md-2 col-lg-2">
                <div class="card">
                    <div class="card-header">
                        Contenido de la página
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
                              <a class="nav-link" href="Guantes.html"><i class="fa-solid fa-tag"></i> Guantes </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Uniformes.html"><i class="fa-solid fa-tag"></i> Uniformes </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Promociones.html"><i class="fa-solid fa-tag"></i>  Promociones </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Carrito.html"><i class="fa-solid fa-cart-shopping"></i> Carrito </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="base.html"><i class="fa-solid fa-tag"></i>  Consultas SQL </a>
                          </li>
                        </ul>
                    </div> <!--Div card-body-->
                </div><!--Div card-->
            </div><!--2-Columnas-->

            <main id="productos" class="col-sm-5 col-md-5 col-lg-5">

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
	$consulta = "SELECT * FROM `carrito`";
	$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	
	// Motrar el resultado de los registro de la base de datos
	// Encabezado de la tabla
	
 	$contador = 1; // Comenzamos en 2 para AgregarCarro2

while ($columna = mysqli_fetch_array($resultado)) {
    echo "<div class='card m-4 w-75 h-10'>";
    echo "  <div class='card-body'>        ";
    echo "    <h5 class='card-title'>" . $columna['nombre_del_equipo'] . "</h5>";
    echo "    <p class='card-text'>" . $columna['descripcion'] . "</p>        ";
    echo "    <p class='card-text'>" . $columna['precio'] . "</p>        ";
    echo "    <button class='btn btn-primary' onclick='AgregarCarro" . $contador . "(" . $columna['id_producto'] . ")'>Agregar al total</button>        ";
    echo "  </div>";
    echo "</div>";
    
    $contador++; // Incrementamos el contador para la siguiente función
}

// Generamos las funciones AgregarCarro2, AgregarCarro3, ...
for ($i = 2; $i < $contador; $i++) {
   
}
	// cerrar conexión de base de datos
	mysqli_close( $conexion );
?>
            
        </main>

        <!--Parte del carro-->
        <aside class="col-sm-5 col-md-5 col-lg-5">
            <h2>Carrito</h2>
			<h5>El tercer producto tiene un descuento adicional :)</h5>
            <ul id="carrito" class="list-group"></ul>
            <hr>
            <p class="text-right">Total: $ <span id="total"></span></p>
        </aside>

        </div><!--Cierre row 1-->
    </div> <!--Cierre "container"-->
	
    <footer>
        <!-- place footer here -->
      </footer> <!--Cierre footer-->

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script><script src="funcioncarro.js"></script>
    </body>
</html>
