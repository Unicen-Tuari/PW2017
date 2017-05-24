<?php
require_once('controllerTareas.php');
require_once('config/config_app.php');

function parseUrl($url){
  $arr_data = explode ("/",$url);
  $arrayReturn[ConfigApp::$RESOURCE] = $arr_data[0];
  $arrayReturn[ConfigApp::$ACTION] = $arr_data[1];
  $arrayReturn[ConfigApp::$PARAMETERS] = isset($arr_data[2]) ? $arr_data[2] : null;
  return $arrayReturn;
}
$controller = new ControllerTareas();

if($_GET[ConfigApp::$ACTION] == ''){
  $controller->mostrarTareas();
}
else{
  $datos = parseUrl($_GET[ConfigApp::$ACTION]);
  if($datos[ConfigApp::$RESOURCE] === ConfigApp::$RESOURCE_TASK) {
    switch ($datos[ConfigApp::$ACTION] ) {
      case ConfigApp::$ACTION_DELETE:
        $controller->BorrarTarea($datos[ConfigApp::$PARAMETERS]);
        break;
      case ConfigApp::$ACTION_ADD:
        $controller->InsertarTarea();
        break;
      case ConfigApp::$ACTION_VIEW:
        $controller->mostrarTareaDetalle($datos[ConfigApp::$PARAMETERS]);
        break;
      case ConfigApp::$ACTION_FINISHED:
        $controller->TerminarTarea($datos[ConfigApp::$PARAMETERS]);
        break;
      default:
        $controller->mostrarTareas(["Error: Acción inválida"]);
        break;
      }
  }
}

























  // require_once('controllerTareas.php');
  // include_once "config/config_app.php";
  //
  // if(!isset($_GET['action']) ) {
  //   $controllerTareas = new ControllerTareas();
  //   $controllerTareas->mostrarTareas(array());
  // }
  // else{
  //   echo "ACTION ES ".$_GET['action'];
  //   $params = explode('/',$_GET['action']);
  //   var_dump($params);
  //   if ($_GET['action'] == '' || $_GET['action'] == ConfigApp::$ACTION_LISTA_TAREAS){
  //     // Home del sitio
  //     $controllerTareas = new ControllerTareas();
  //     $controllerTareas->mostrarTareas(array());
  //   } elseif ($_GET['action'] == ConfigApp::$ACTION_DELETE_TASK){
  //     $controllerTareas = new ControllerTareas();
  //     $controllerTareas->BorrarTarea();
  //   }
  //   elseif ($_GET['action'] == ConfigApp::$ACTION_NEW_TASK){
  //     $controllerTareas = new ControllerTareas();
  //     $controllerTareas->InsertarTarea();
  //   }
  //   elseif (strpos($_GET['action'],ConfigApp::$ACTION_VIEW_TASK)=== 0){
  //     $controllerTareas = new ControllerTareas();
  //     $controllerTareas->mostrarTareaDetalle($params);
  //   }
  //   else {
  //     echo "<h1>Pagina no encontrada</h1>";
  //   }

  // }
 ?>
