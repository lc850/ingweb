<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Software para Gestión Escolar</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/misestilos.css">
    <script src="js/jquery.js"></script>
<!-- </head> -->
<body>
    <!--Header de la página-->
        <header>
       <nav class="navbar navbar-default noround nomargen">
        <div class="container-fluid">
          <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="http://localhost/gescuela2/public/home"> GEscuela</a>
            <img src="img/logo.png" alt="" width="60px">
          </div>
          
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li><a href="#">Info.<span class="sr-only">(current)</span></a></li>
              <li><a href="#">Ayuda</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Módulos <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Asistencia</a></li>
                  <li><a href="#">Reportes</a></li>
                  <li><a href="#">Planeación</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Calificación</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Ayuda</a></li>
                </ul>
              </li>
              <li><a href="sesion">Iniciar Sesión</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <form name="buscar" class="navbar-form navbar-left" role="search">
              <div class="form-group">
                <input class="form-control" placeholder="Buscar" type="text">
              </div>
              <button type="submit" class="btn btn-info">Buscar</button>
            </form>
            </ul>
          </div>
        </div>
      </nav>
    </header>
<!--Cuerpo-->
  <body>
        @yield('contentHome')
        @yield('ruta')
        
        <table align="center"> 
          <tr>
            <td> 
              @yield('contentSesion')
            </td>
          </tr>
        </table>

    <!--footer-->
 <hr>
  <footer class="container-fluid">
    <div class="row">
      <div class="col-xs-4 text-left">
        <p>© 2015 Luis C. Santillán Hdez.</p>
      </div>
      <div class="col-xs-4 text-center">
        <p><a href="">Github </a> <a href="">- About</a></p>
      </div>
      <div class="col-xs-4 text-right">
        <p>Sistema GEscuela All-RIGHTS-RESERVED</p>
      </div>
  </footer>
    <script src="js/bootstrap.js"></script>
</body>
</html>