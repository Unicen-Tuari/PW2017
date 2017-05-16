<?php
  require_once('bbdd.php');
  if(isset($_GET["id_tarea"])){
    $id_tarea = $_GET["id_tarea"];
    BorrarTarea($id_tarea);
  }
  header('Location: index.php');
?>
