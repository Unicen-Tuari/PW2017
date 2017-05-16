<?php
/* Smarty version 3.1.30, created on 2017-05-16 19:53:09
  from "C:\xampp\htdocs\web\tupar\tareas\templates\form_tarea.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_591b3c85965e72_93061580',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '111a473311c101e43efb2170b616208c093baf13' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\tupar\\tareas\\templates\\form_tarea.tpl',
      1 => 1494956732,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_591b3c85965e72_93061580 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '10857591b3c8593eb23_68409062';
?>

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
<?php }
}
