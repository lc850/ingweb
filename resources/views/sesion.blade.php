@extends('master')

@section('ruta')

      <ul class="breadcrumb">
        <li><a href="home">Inicio</a></li>
        <li class="active">Iniciar Sesión</li>
      </ul>

@stop
  
@section('contentSesion')

<div class="container-fluid">
  <div class="row">
    <div class="col-xs-12 text-center">
      <div class="panel panel-info">
        <div class="panel-heading">
          <h3 class="panel-title">Iniciar Sesión</h3>
        </div>
        <div class="panel-body">
          <table align="center">
            <tr align="right">
              <td>Usuario:&nbsp;</td>
              <td><input class="form-control" id="inputUser" placeholder="Usuario" type="text"></td>
            </tr>
            <tr>
              <td>Contraseña:&nbsp;</td>
              <td><input class="form-control" id="inputContra" placeholder="Contraseña" type="password"></td>
            </tr>
            <tr>
              <td colspan="2"><button type="submit" class="btn btn-info margen1p">Iniciar</button></td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

@stop
