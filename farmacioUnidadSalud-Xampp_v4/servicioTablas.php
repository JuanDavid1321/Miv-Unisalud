<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="images/logo-unisalud-header.png" />
    <!-- Para agregar el ícono favicon -->
    <title>Tablas</title>

    <!-- LIBRERÍAS -->
    <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css"/>
    <script src="librerias/jquery-3.6.1.min.js"></script>
    <script src="librerias/plotly-2.14.0.min.js"></script>
    <script src="https://kit.fontawesome.com/00121ead02.js" crossorigin="anonymous"></script>
    <link href="http://fonts.cdnfonts.com/css/baskerville" rel="stylesheet" />

    <link rel="stylesheet" href="css/estilosTablas.css" />
  </head>

  <body>
    <!-- Para la cabecera con menú principal -->
    <header>
      <a href="#" class="logo">
        <img src="images/logo-unisalud-header.png" alt="logo de la compañia" />
        <h2>SERVICIO FARMACÉUTICO</h2>
      </a>

      <div class="menu">
        <ul>
          <li>
            <a href="inicio.php">
              <i class="fa-solid fa-house"></i>
              Inicio
            </a>
          </li>
          <li>
            <a href="servicioGraficas.php">
              <i class="fa-sharp fa-solid fa-chart-line"></i>
              Gráficas
            </a>
          </li>
          <li>
            <a id="seleccionActual" href="servicioTablas.php">
              <i class="fa-solid fa-table-list"></i>
              Tablas
            </a>
          </li>
          <li>
            <a id="cierre" href="index.php">
              <i class="fa-solid fa-user-xmark"></i>
              Cerrar Sesión
            </a>
          </li>
        </ul>
      </div>
    </header>

    <main>
      
      <div class="container" id="tabla" style="margin-top: 50px;=">
		
				<div class="panel panel-light">
				
					<div class="panel panel-heading">

            <div class="panel panel-body">

              <div id="tabla"></div>
                            
            </div>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>

<script type="text/javascript">
  $(document).ready(function(){
    $('#tabla').load('php/tabla.php');	
  });
</script>