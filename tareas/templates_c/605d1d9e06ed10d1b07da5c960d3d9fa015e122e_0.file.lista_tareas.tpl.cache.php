<?php
/* Smarty version 3.1.30, created on 2017-05-16 19:53:09
  from "C:\xampp\htdocs\web\tupar\tareas\templates\lista_tareas.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_591b3c8586e403_82988402',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '605d1d9e06ed10d1b07da5c960d3d9fa015e122e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\tupar\\tareas\\templates\\lista_tareas.tpl',
      1 => 1494957186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:form_tarea.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_591b3c8586e403_82988402 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '10547591b3c85753bb0_08545528';
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "setup", 0);
?>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?>


<ul class="list-group">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tareas']->value, 'fila');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['fila']->value) {
?>
      <li class="list-group-item" >
          { $fila.nombre }
          <a href="borrar_tarea.php?id_tarea=<?php echo $_smarty_tpl->tpl_vars['fila']->value['id_tarea'];?>
">Borrar</a>
          <a href="terminar_tarea.php?id_tarea=<?php echo $_smarty_tpl->tpl_vars['fila']->value['id_tarea'];?>
">Terminada</a>
          <a href="detalle_tarea.php?id_tarea=<?php echo $_smarty_tpl->tpl_vars['fila']->value['id_tarea'];?>
">Ver detalles</a>
    </li>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</ul>
<?php $_smarty_tpl->_subTemplateRender("file:form_tarea.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
