<?php
require_once('ViewTareas.php');
require_once('ModelTareas.php');

class ControllerTareas
{
  private $vista;
  private $modelo;

  function __construct()
  {
      $this->vista = new ViewTareas();
      $this->modelo = new ModelTareas();
  }

  function mostrarTareas(){
    $tareas = $this->modelo->GetTareas();
    $tareasAMostrar = array();
    foreach ($tareas as $tarea) {
      //PROHIBIDA
      if(strpos(strtoupper($tarea['nombre']), 'PROHIBIDA') === false){
          //Agrega en la ultima pos del array.
          $tareasAMostrar[]= $tarea;
      }
    }
    $this->vista->mostrarTareas("Lista de Tareas", $tareasAMostrar);
  }
}


 ?>
