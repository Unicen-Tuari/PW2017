<?php
  require_once('libs/Smarty.class.php');
/**
 *
 */
class ViewTareas
{
  private $smarty;
  private $baseDir;

  function __construct()
  {
    $this->smarty = new Smarty;
    $this->baseDir = 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/';
  }

  function mostrarTareas($titulo, $tareas, $errores){
    $this->smarty->assign("titulo", $titulo);
    $this->smarty->assign("tareas", $tareas);
    $this->smarty->assign("errores", $errores);
    $this->smarty->assign("baseDir", $this->baseDir);

    $this->smarty->display('lista_tareas.tpl');
  }


  function mostrarTareaDetalle($tarea){
    $this->smarty->assign("baseDir", $this->baseDir);
    $this->smarty->assign("tarea", $tarea);
    $this->smarty->display('detalle_tarea.tpl');
  }
}


 ?>
