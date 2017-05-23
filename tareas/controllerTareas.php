<?php
require_once('viewTareas.php');
require_once('modelTareas.php');
require_once('modelPalabrasProhibidas.php');

class ControllerTareas
{
  private $vista;
  private $modelo;

  function __construct()
  {
      $this->vista = new ViewTareas();
      $this->modelo = new ModelTareas();
  }

  function mostrarTareas($errores){
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

  function BorrarTarea(){
    if(isset($_GET["id_tarea"])){
      $id_tarea = $_GET["id_tarea"];
      $this->modelo->BorrarTarea($id_tarea);
    }
    header('Location: index.php');
  }

  public function TerminarTarea()
  {
    if(isset($_GET["id_tarea"])){
      $id_tarea = $_GET["id_tarea"];
      $this->modelo->TerminarTarea($id_tarea);
    }
    header('Location: index.php');
  }

  public function mostrarTareaDetalle()
  {
    if(isset($_GET["id_tarea"])){
      $id_tarea = $_GET["id_tarea"];
      $fila = $this->modelo->GetTarea($id_tarea);
      $this->vista->mostrarTareaDetalle($fila);
    }
  }
}


 ?>
