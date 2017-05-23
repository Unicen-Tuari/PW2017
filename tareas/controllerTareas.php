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

  function InsertarTarea(){
    //Chequea que tenga un nombre
    if(isset($_POST["nombre"]) && strlen(trim($_POST["nombre"])) > 0)
    {
      $nombre = $_POST["nombre"];
      $descripcion = $_POST["descripcion"];
      $this->modelo->InsertarTarea($nombre, $descripcion);
    }
    header('Location: index.php');
  }

  function BorrarTarea(){
    if(isset($_GET["id_tarea"])){
      $id_tarea = $_GET["id_tarea"];
      $this->modelo->BorrarTarea($id_tarea);
    }
    header('Location: index.php');
  }
}


 ?>
