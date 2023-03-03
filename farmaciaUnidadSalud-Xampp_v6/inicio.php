<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="images/logo-unisalud-header.png" />
    <!-- Para agregar el ícono favicon -->
    <title>Inicio</title>

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

    <link rel="stylesheet" href="css/estilosInicio.css" />
  </head>
  <body>
    <!-- Para mi cabecera con menú principal -->
    <header>
      <a href="#" class="logo">
        <img src="images/logo-unisalud-header.png" alt="logo de la compañia" />
        <h2>SERVICIO FARMACÉUTICO</h2>
      </a>
      
      <div class="menu">
        <ul>
          <li>
            <a id="seleccionActual" href="inicio.php">
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
      <section class="seccionTitulo">
        <br />
        <h1 style="color: #af0b19; font-weight: bold; text-transform: uppercase; margin-top: -30px">
          ¿Qué tiene a su disposición?
        </h1>
        <br />
        <!--<hr style="width: 80%; margin: auto; color: #AF0B19;">-->
      </section>
      <section class="seccionTarjetasInformativas" style="margin-top: -20px; margin-bottom: 30px;">
        <div id="cardGraficas" class="card" style="width: 20rem; box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;">
          <img
            src="images/iconoGraficasLineales.png"
            class="card-img-top"
            alt="iconoGraficas"
          />
          <div class="card-body">
            <h5 class="card-title" style="font-weight: bold">GRÁFICAS</h5>
            <hr />
            <p class="card-text">
              Para que pueda observar de forma lineal el status de temperatura y
              humedad
            </p>
          </div>
        </div>
        <div id="cardTablas" class="card" style="width: 20rem">
          <img
            src="images/iconoTablas.png"
            class="card-img-top"
            alt="iconoGraficas"
          />
          <div class="card-body">
            <h5 class="card-title" style="font-weight: bold">TABLAS</h5>
            <hr />
            <p class="card-text">
              Para que pueda observar por medio de registros la temperatura y
              humedad
            </p>
          </div>
        </div>
      </section>
      <section class="secccionMapaGoogleUnidadDeSalud" style="background-color: #edf2f4; padding: 30px; border-top: 2px solid grey;">
        <h1 style="color: #af0b19; font-weight: bold; text-transform: uppercase">
          Ubicación de la unidad de salud
        </h1>
        <h1 style="color: #345070; font-weight: bold; text-transform: uppercase">
          universidad del cauca
        </h1>
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.196599870825!2d-76.60580538573296!3d2.441469998220835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3003058216e8fb%3A0xfa501d4669be3eed!2sUnidad%20de%20Salud!5e0!3m2!1ses!2sco!4v1665679858222!5m2!1ses!2sco"
          width="600"
          height="450"
          style="padding-top: 50px; border-radius: 0;"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
        ></iframe>
      </section>
    </main>
  </body>
</html>
