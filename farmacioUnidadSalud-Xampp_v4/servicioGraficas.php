<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="images/logo-unisalud-header.png" />
    <!-- Para agregar el ícono favicon -->
    <title>Gráficas</title>

    <!-- LIBRERÍAS -->
    <link
      rel="stylesheet"
      type="text/css"
      href="librerias/bootstrap/css/bootstrap.css"
    />
    <script src="librerias/jquery-3.6.1.min.js"></script>
    <script src="librerias/plotly-2.14.0.min.js"></script>
    <script
      src="https://kit.fontawesome.com/00121ead02.js"
      crossorigin="anonymous"
    ></script>
    <link href="http://fonts.cdnfonts.com/css/baskerville" rel="stylesheet" />

    <link rel="stylesheet" href="css/estilosGraficas.css" />
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
            <a id="seleccionActual" href="servicioGraficas.php">
              <i class="fa-sharp fa-solid fa-chart-line"></i>
              Gráficas
            </a>
          </li>
          <li>
            <a href="servicioTablas.php">
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
      <section>
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="panel panel-primary">
                <div class="panel panel-body">
                  <div class="row">
                    <div class="col-sm-6">
                      <div id="cargaLineal"></div>
                    </div>
                    <div class="col-sm-6">
                      <div id="cargaLineal2"></div>
                    </div>
                  </div>
                  <div class="separador"></div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div id="cargaLineal3"></div>
                    </div>
                    <div class="col-sm-6">
                      <div id="cargaLineal4"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
  </body>
</html>

<script type="text/javascript">
  $(document).ready(function () {
    $("#cargaLineal").load("php/lineal.php");
    $("#cargaLineal2").load("php/lineal2.php");
    $("#cargaLineal3").load("php/lineal3.php");
    $("#cargaLineal4").load("php/lineal4.php");
  });
</script>
