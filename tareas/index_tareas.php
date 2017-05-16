<?php
  require_once('bbdd.php');
  $tareas = GetTareas();
  require 'libs/Smarty.class.php';
  $smarty = new Smarty;

  $smarty->force_compile = true;
  $smarty->debugging = true;
  $smarty->caching = true;
  $smarty->cache_lifetime = 120;

  $smarty->assign("tareas", $tareas);
  $smarty->display('lista_tareas.tpl');
 ?>
