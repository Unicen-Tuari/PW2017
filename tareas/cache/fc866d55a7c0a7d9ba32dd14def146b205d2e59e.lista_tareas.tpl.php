<?php
/* Smarty version 3.1.30, created on 2017-05-16 19:53:09
  from "C:\xampp\htdocs\web\tupar\tareas\templates\lista_tareas.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_591b3c859b1308_51239593',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '605d1d9e06ed10d1b07da5c960d3d9fa015e122e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\tupar\\tareas\\templates\\lista_tareas.tpl',
      1 => 1494957186,
      2 => 'file',
    ),
    '80bb29b2d39273d8b1ec34052f340ed0d34fd2b8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\tupar\\tareas\\templates\\header.tpl',
      1 => 1494956403,
      2 => 'file',
    ),
    '111a473311c101e43efb2170b616208c093baf13' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\tupar\\tareas\\templates\\form_tarea.tpl',
      1 => 1494956732,
      2 => 'file',
    ),
    '560f7cff2e90df480fde76cf06b1a1617ae65c4e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\tupar\\tareas\\templates\\footer.tpl',
      1 => 1494956416,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_591b3c859b1308_51239593 (Smarty_Internal_Template $_smarty_tpl) {
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
        <li class="list-group-item" >
          { $fila.nombre }
          <a href="borrar_tarea.php?id_tarea=5">Borrar</a>
          <a href="terminar_tarea.php?id_tarea=5">Terminada</a>
          <a href="detalle_tarea.php?id_tarea=5">Ver detalles</a>
    </li>
        <li class="list-group-item" >
          { $fila.nombre }
          <a href="borrar_tarea.php?id_tarea=12">Borrar</a>
          <a href="terminar_tarea.php?id_tarea=12">Terminada</a>
          <a href="detalle_tarea.php?id_tarea=12">Ver detalles</a>
    </li>
        <li class="list-group-item" >
          { $fila.nombre }
          <a href="borrar_tarea.php?id_tarea=13">Borrar</a>
          <a href="terminar_tarea.php?id_tarea=13">Terminada</a>
          <a href="detalle_tarea.php?id_tarea=13">Ver detalles</a>
    </li>
        <li class="list-group-item" >
          { $fila.nombre }
          <a href="borrar_tarea.php?id_tarea=15">Borrar</a>
          <a href="terminar_tarea.php?id_tarea=15">Terminada</a>
          <a href="detalle_tarea.php?id_tarea=15">Ver detalles</a>
    </li>
        <li class="list-group-item" >
          { $fila.nombre }
          <a href="borrar_tarea.php?id_tarea=16">Borrar</a>
          <a href="terminar_tarea.php?id_tarea=16">Terminada</a>
          <a href="detalle_tarea.php?id_tarea=16">Ver detalles</a>
    </li>
  
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

<?php }
}
