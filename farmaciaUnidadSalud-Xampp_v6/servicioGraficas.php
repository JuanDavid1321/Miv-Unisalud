<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="images/logo-unisalud-header.png" />
    <!-- Para agregar el ícono favicon -->
    <title>Gráficas</title>

    <!-- LIBRERÍAS -->
    <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css"/>
    <script src="librerias/jquery-3.6.1.min.js"></script>
    <script src="librerias/plotly-2.14.0.min.js"></script>
    <script src="https://kit.fontawesome.com/00121ead02.js" crossorigin="anonymous"></script>
    <link href="http://fonts.cdnfonts.com/css/baskerville" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js"></script>
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>

    <link rel="stylesheet" href="css/estilosGraficas.css" />
    <style>
      .contenedor-mes{
        background-color:#edf2f4; border: 3px solid #1F77B4; border-radius: 20px; margin-top: -8px; margin-left: 300px; margin-right: 300px; padding-top: 10px; padding-bottom: 10px; display: flex; justify-content: center; align-items: center; font-size: 20px; color: #1F77B4
      }
      .etiqueta-select{
        font-weight: bold; margin-right: 20px;
      }
      .selector-mes{
        border-color: #1F77B4; color: #1F77B4; border-radius: 20px; font-weight: bold; border-width: 3px; padding: 3px 15px;
      }
      .consulta{
        background-color: #edf2f4; color:#1F77B4; margin-left: 5px; margin-right: 200px; border-radius: 20px; font-weight: 800; border: 3px solid #edf2f4; outline: none; padding: 2px 15px;
      }
      .consulta:hover{
        background-color: #1F77B4; color: white; 
      }
      .boton-reporte{
        border: 2px solid #af0b19; background-color: white; color: #af0b19; font-weight: bold; border-radius: 20px; padding: 2px 15px;
      }
      .boton-reporte:hover{
        background-color: #af0b19; color: white;
      }

    </style>
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

    <main style="margin: 20px;">
      <section class="contenedor-mes">
        <form action="servicioGraficas.php" method="POST">
            <label for="mes-selecionado" class="etiqueta-select">Seleccione un mes: </label>
            <select name="mes" class="selector-mes" id="mes-selecionado" >
              <option value="1">Enero</option>
              <option value="2">Febrero</option>
              <option value="3">Marzo</option>
              <option value="4">Abril</option>
              <option value="5">Mayo</option>
              <option value="6">Junio</option>
              <option value="7">Julio</option>
              <option value="8">Agosto</option>
              <option value="9">Septiembre</option>
              <option value="10">Octubre</option>
              <option value="11">Noviembre</option>
              <option value="12">Diciembre</option>
            </select>
            <button id="consultar" type="submit" class="consulta">
              <i class="fa-solid fa-magnifying-glass"></i>
            </button>
            
          </form>
          <button class="boton-reporte" id="descargar-pdf"><i class="fa-solid fa-download"></i> Reporte</button>
      </section>

      <section class="cont" style="margin-top: -20px;">
        <div id="contenido-div1" class="card" style="border: 2px solid grey; background-color: #edf2f4; margin: 50px 25px; border-radius: 20px; box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;">
          <div id="cargaLineal" style="margin: 20px;" class="mi-grafica"></div>  
        </div>

        <div id="contenido-div2" class="card" style="border: 2px solid grey; background-color: #edf2f4; margin: 50px 25px;  border-radius: 20px; box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;">
          <div id="cargaLineal2" style="margin: 20px; object-fit: cover;" class="mi-grafica"></div>  
        </div>

        <div id="contenido-div3" class="card" style="border: 2px solid grey; background-color: #edf2f4; margin: 50px 25px; border-radius: 20px; box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;">
          <div id="cargaLineal3" style="margin: 20px; object-fit: cover;" class="mi-grafica"></div>  
        </div>

        <div id="contenido-div4" class="card" style="border: 2px solid grey; background-color: #edf2f4; margin: 50px 25px;  border-radius: 20px; box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;">
          <div id="cargaLineal4" style="margin: 20px; object-fit: contain;" class="mi-grafica"></div>
        </div>
    </main>
  </body>
</html>

<script src="js/pdf.js"></script>


<script type="text/javascript">
  $(document).ready(function () {
    $("#cargaLineal3").load("php/lineal3.php");
    $("#cargaLineal4").load("php/lineal4.php");
  });
</script>

<?php
	require_once 'php/consultaTemp_M.php';
  require_once 'php/consultaHum_M.php';
?>
