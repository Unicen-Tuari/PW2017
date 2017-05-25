<?php
require_once('views/viewTareas.php');
require_once('models/modelTareas.php');
require_once('models/modelPalabrasProhibidas.php');

class ControllerTareas
{
  private $vista;
  private $modelo;

  function __construct()
  {
      $this->vista = new ViewTareas();
      $this->modelo = new ModelTareas();
  }

  function mostrarTareas($errores = []){
    $tareas = $this->modelo->GetTareas();
    $tareasAMostrar = array();
    foreach ($tareas as $tarea) {
      //PROHIBIDA
      if(strpos(strtoupper($tarea['nombre']), 'PROHIBIDA') === false){
          //Agrega en la ultima pos del array.
          $tareasAMostrar[]= $tarea;
      }
    }
    $this->vista->mostrarTareas("Lista de Tareas", $tareasAMostrar, $errores);
  }

  function InsertarTarea(){
    $errores = array();
    //Chequea que tenga un nombre
    if(isset($_POST["nombre"]) && strlen(trim($_POST["nombre"])) > 0)
    {
      $nombre = $_POST["nombre"];
      $descripcion = $_POST["descripcion"];
      if($this->ValidarPalabrasProhibidas($nombre, $descripcion))
        $this->modelo->InsertarTarea($nombre, $descripcion);
      else {
        $errores[] = 'Hay una palabra prohibida';
      }
    }
    //cambie el redirect por mostrar en esta misma pagina
    $this->mostrarTareas($errores);
    //header('Location: index.php');
  }

  private function ValidarPalabrasProhibidas($nombre, $descripcion)
  {
    $modelo_prohibidas = new ModelPalabrasProhibidas();
    $prohibidas = $modelo_prohibidas->GetPalabrasProhibidas();
    foreach ($prohibidas as $prohibida) {
      if(!(strpos($nombre, $prohibida)===false && strpos($descripcion, $prohibida)===false))
        return false;
    }
    return true;
  }

  function BorrarTarea($id_tarea){
    $errores = array();
    if(isset($id_tarea)){
      if($this->modelo->GetTarea($id_tarea)){
        $this->modelo->BorrarTarea($id_tarea);
      }
      else{
          $errores[] = "Error: La tarea no existe";
      }
    }
    else {
      $errores[] = "Error: ID invalido";
    }
    $this->mostrarTareas($errores);
  }

  public function TerminarTarea($id_tarea)
  {
    $errores = array();
    if(isset($id_tarea)){
      $this->modelo->TerminarTarea($id_tarea);
    }
    else {
      $errores[] = "Error: ID invalido";
    }
    $this->mostrarTareas($errores);
  }

  public function mostrarTareaDetalle($id_tarea)
  {
    if(isset($id_tarea)){
      $fila = $this->modelo->GetTarea($id_tarea);
      $this->vista->mostrarTareaDetalle($fila);
    }
  }
}


 ?>
