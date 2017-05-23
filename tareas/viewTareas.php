<?php
  require_once('libs/Smarty.class.php');
/**
 *
 */
class ViewTareas
{
  private $smarty;

  function __construct()
  {
    $this->smarty = new Smarty;
  }

  function mostrarTareas($titulo, $tareas){
    $this->smarty->assign("titulo", $titulo);
    $this->smarty->assign("tareas", $tareas);
    $this->smarty->display('lista_tareas.tpl');
  }


  function mostrarTareaDetalle($tarea){
    $this->smarty->assign("tarea", $tarea);
    $this->smarty->display('detalle_tarea.tpl');
  }
}


 ?>
