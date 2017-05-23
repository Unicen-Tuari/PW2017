<?php
  require_once('controllerTareas.php');
  include_once "config/config_app.php";

  if(!isset($_GET['action']) ) {
    $controllerTareas = new ControllerTareas();
    $controllerTareas->mostrarTareas(array());
  }
  else{
    echo "ACTION ES ".$_GET['action'];
    $params = explode('/',$_GET['action']);
    var_dump($params);
    if ($_GET['action'] == '' || $_GET['action'] == ConfigApp::$ACTION_LISTA_TAREAS){
      // Home del sitio
      $controllerTareas = new ControllerTareas();
      $controllerTareas->mostrarTareas(array());
    } elseif ($_GET['action'] == ConfigApp::$ACTION_DELETE_TASK){
      $controllerTareas = new ControllerTareas();
      $controllerTareas->BorrarTarea();
    }
    elseif ($_GET['action'] == ConfigApp::$ACTION_NEW_TASK){
      $controllerTareas = new ControllerTareas();
      $controllerTareas->InsertarTarea();
    }
    elseif (strpos($_GET['action'],ConfigApp::$ACTION_VIEW_TASK)=== 0){
      $controllerTareas = new ControllerTareas();
      $controllerTareas->mostrarTareaDetalle($params);
    }
    else {
      echo "<h1>Pagina no encontrada</h1>";
    }

  }
 ?>
