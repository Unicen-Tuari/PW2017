<?php
  require_once('bbdd.php');
  require_once('libs/Smarty.class.php');

  $tareas = GetTareas();
  $smarty = new Smarty;

  // $smarty->force_compile = true;
   $smarty->debugging = true;
  // $smarty->caching = true;
  // $smarty->cache_lifetime = 120;
  $titulo = 'Lista de Tareas TUPAR';
  $smarty->assign("titulo", $titulo);
  $smarty->assign("tareas", $tareas);
  $smarty->display('lista_tareas.tpl');
 ?>
