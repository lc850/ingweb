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