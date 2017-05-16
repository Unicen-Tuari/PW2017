<?php
  require_once('bbdd.php');
  $tareas = GetTareas();
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lista tareas</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/estilo.css">
  </head>
  <body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Tareas</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="#">-</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <ul class="list-group">
      <?php
      foreach ($tareas  as $fila)
      {
        $claseTerminada = '';
        if($fila["terminada"])
          $claseTerminada = 'finished';
        echo '<li class="list-group-item '.$claseTerminada.'" >';

        echo        $fila['nombre'].': '.
                $fila['descripcion'].': '.
                '<a href="borrar_tarea.php?id_tarea='.$fila['id_tarea'].'">Borrar</a> '.
                '<a href="terminar_tarea.php?id_tarea='.$fila['id_tarea'].'">Terminada</a>';
        echo      '</li>';
      }
      ?>
    </ul>
    <form class="form-horizontal" action="insertar_tarea.php" method="post">
      <div class="form-group">
        <label class="col-sm-2 control-label">Nombre</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="nombre" placeholder="Nombre">
        </div>
      </div>
      <div class="form-group">
        <label for="inputDescripcion" class="col-sm-2 control-label">Descripción</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="descripcion" id="inputDescripcion" placeholder="Descripción">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">Enviar</button>
        </div>
      </div>
    </form>
  </body>
</html>
