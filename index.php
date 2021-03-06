<?php
require 'dbconnection/connection.php';
include 'php/classAlumno.php';
$qalumno = pg_query($connection, 'SELECT * FROM "Alumno" WHERE "Codigo_alum" = ' . "'2017000000'");
$row = pg_fetch_row($qalumno);
$alumno = new Alumno($row[0], $row[3], $row[1], $row[4], $row[2]);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula Virtual</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <header>
      <nav class="navbar navbar-light bg-light px-3">
        <div class="containter">
          <button class="navbar-toggler" type="button" id="showMain" onclick="showAndHideMain()">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand mx-2" href="#">2021  I - Ingenierias</a>
        </div>
        <div class="containter">
          <div class="row">
            <div class="col">
              <a class="nav-link active" href="http://">
                <span><i class="bi bi-globe"></i></span>
              </a>
            </div>
            <div class="col">
              <a class="nav-link active" href="http://">
                <span><i class="bi bi-bell"></i></span>
              </a>
            </div>
            <div class="col">
              <a class="nav-link active" href="http://">
                <span><i class="bi bi-chat-text"></i></span>
              </a>
            </div>
            <div class="col">
              <a class="navbar-brand mx-2 align-self-center" href="#">
                <?php
                echo $alumno->getNombres() . " " . $alumno->getApellidos();
                ?>
              </a>
            </div>
            <div class="col">
              <img src="image/incognita.jpg" class="rounded-circle" width="37" height="37" >
            </div>
        </div>
        </div>
      </nav>
    </header>
    N°
    
    <div class="main" id="main" >
      <a class="" href="http://">
        <span><i class="bi-speedometer2"></i></span>
        <span>Área personal</span>
      </a>

      <a class="" href="http://">
        <span><i class="bi-house-fill"></i></span>
        <span>Inicio del sitio</span>
      </a>

      <a class="" href="http://">
        <span><i class="bi-calendar"></i></span>
        <span>Calendario</span>
      </a>

      <a class="" href="http://">
        <span><i class="bi-file-earmark"></i></span>
        <span>Archivos privados</span>
      </a>

      <a class="" href="http://">
        <span><i class="bi bi-journals"></i></span>
        <span>Mis cursos</span>
      </a>
    </div>

    <div class="" id="page">
      <div class="row row-cols-1 ">
        <div class="col">
          <div class="card border-top border-3 border-info ">
            <div class="card-body">
              <div class="d-flex bd-highlight mb-3">
                <div class="p-2 bd-highlight">
                  <img src="image/incognita.jpg" class="rounded-circle" width="200" height="200" >
                </div>
                <div class="p-2 bd-highlight align-self-center">
                  <h3 class="card-title">
                  <?php
                  echo $alumno->getNombres() . " " . $alumno->getApellidos();
                  ?>
                  </h3>
                </div>
                <div class="p-2 bd-highlight align-self-center">
                  <a href="#" class="btn btn-primary btn-lg">
                    <span><i class="bi bi-chat-right-dots"></i></span>
                    <span>Mensajes</span>
                  </a>
                </div>
              </div>
              <div class="d-flex flex-row-reverse bd-highlight">
                <div class="p-2 bd-highlight">
                  <a href="#" class="btn btn-secondary btn-lg">
                    <span>Personalizar pagina</span>
                  </a>
                </div>
               </div>
            </div>
          </div>
        </div>
      </div><!-- Page web, where is the page content -->
        <div class="row ">
          <div class="col-8 ">
            <div class="card border-top border-3 border-info ">
              Mayor
            </div>
          </div>
          <div class="col-4">
            <div class="card border-top border-3 border-info ">
              Mayors
            </div>
          </div>
        </div>
    </div>
    <footer>
    </footer>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  <script src="js/main_show_and_hide.js"></script>
</html>