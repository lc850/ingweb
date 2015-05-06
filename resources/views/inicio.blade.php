@extends('master')

@section('contentHome')
<div class="jumbotron">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-8 text-center">
                  <h2>Sistema de Gestión Escolar</h2>
                  <p>Este sistema ayuda en la automatización de tareas realizadas por los docentes con el objetivo de agilizar procesos durante el periodo de duración del curso.</p>
                  <p><a class="btn btn-primary btn-lg">Más Información</a></p>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-4 text-center">
            <form class="form-horizontal" name="sesion">
              <fieldset>
                <legend><strong>Iniciar Sesión </strong></legend>
                  <table align="center">
                    <tr align="right">
                      <td>Usuario: </td>
                      <td><input class="form-control" id="inputUser" placeholder="Usuario" type="text"></td>
                    </tr>
                    <tr>
                      <td>Contraseña: </td>
                      <td><input class="form-control" id="inputContra" placeholder="Contraseña" type="password"></td>
                    </tr>
                    <tr>
                      <td colspan="2"><button type="submit" class="btn btn-primary margen1p">Submit</button></td>
                    </tr>
                  </table>                
              </fieldset>
            </form>
          </div>
        </div>
    </div>
  </div>
</div>
@stop