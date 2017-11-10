<?php
require_once 'controlador/redirectToLogin.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eliminar Registro</title>
    <link rel="stylesheet" href="css/app.css">
  </head>

  <body>
      <nav class="navbar navbar-default">
          <div class="">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              
            </div>
            <div id="navbar" class="collapse navbar-collapse">
              <ul class="nav navbar-nav">
                <li><a href="lectura.php">Lectura</a></li>
                <li class="active"><a href="mantenimiento.php">Mantenimiento</a></li>
                <li><a href="firmas.php">Firmas</a></li>
                <li><a href="ayuda.php">Ayuda</a></li>
                <li><a href="logout.php">Cerrar Sesión</a></li>
                
              </ul>
             
            </div><!--/.nav-collapse -->
          </div>
        </nav>
<main>
    <div class="main">
            <div class="row">
                <div class="col-md-8">
                     <div class="panel panel-default">
                         <div class="panel-body">
                             <form>
                             <div class="form-group">
                                 <label>ID</label>
                                 <input type="number" class="form-control" placeholder="Ingrese ID del registro que desea eliminar.">
                             </div>
                             <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">Eliminar Registro</button>
                         </form>
                         </div>
                     </div>
                </div>
            </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Error</h4>
      </div>
      <div class="modal-body">
        Error al borrar registro. ID no encontrado.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

    <footer>
        <div class="container">
            <p>Copyright &copy; 2017 unis-sistemas</p>
        </div>


      </main>
    </footer>
    
    <script src="bower_components/jquery/dist/jquery.js"></script>
    <script src="bower_components/bootstrap-sass/assets/javascripts/bootstrap.js"></script>

  </body>
</html>