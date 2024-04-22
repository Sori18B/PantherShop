<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Página de inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="Poppins.css">
    <script src="https://kit.fontawesome.com/eeac22f345.js" crossorigin="anonymous"></script>
    <link rel="icon" href="/Imagenes/darkrai.ico">
</head>
<body>
    <nav id="Nav" class="navbar navbar-expand-lg border-bottom border-bottom-dark" data-bs-theme="dark">
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
                <a class="nav-link active" href="carrop.php">Carrito</a>
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
                        Contenido
                    </div>
                    <div class="card-body">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link active" href="Index.html" aria-current="page"><i class="fa-solid fa-house"></i> Inicio</a> 
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
                                <a class="nav-link" href="carrop.php"><i class="fa-solid fa-cart-shopping"></i> Carrito </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="base.html"><i class="fa-solid fa-tag"></i>  Consultas SQL </a>
                          </li>
                        </ul>
                    </div> <!--Div card-body-->
                </div><!--Div card-->
            </div><!--2-Columnas-->

            <div class="col-sm-10 col-md-10 col-lg-10">
                        <header class="container-fluid ">
                            <h1 class="p-2 fs-2 text-primary text-center">ADMINISTRADOR PANTHERSHOP</h1>
                            <p class="fs-5 p-2 border-bottom border-2 text-center" id="eslogan">En este apartado se podrán realizar cambios en la base de datos</p>
                        </header>

                        
                        <div class="card-body">
    <form action="Acliente.php" method="POST">
        <div class="mb-3">
            <label for="cliente_id" class="form-label">Id de cliente:</label>
            <input type="number" id="cliente_id" name="cliente_id" placeholder="Introduce tu ID" class="form-control"><br>
        </div>

        <div class="mb-3">
            <label for="telefono" class="form-label">Teléfono:</label>
            <input type="tel" id="telefono" name="telefono" placeholder="Introduce un nuevo telefono" class="form-control"><br>
        </div>

        <div class="mb-3">
            <label for="Contraseña" class="form-label">Contraseña:</label>
            <input type="password" id="Contraseña" name="Contraseña" placeholder="Introduce una nueva contraseña" class="form-control"><br>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" id="email" name="email" placeholder="Introduce un nuevo correo" class="form-control"><br>
        </div>

        <div class="mb-3">
            <button class="btn btn-outline-info">Actualizar datos</button>
        </div>
    </form>
</div>

                      
                          <!--Galería de imagenes-->

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
                      <img src="./Imagenes/Logo.png" alt="Logo">
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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
