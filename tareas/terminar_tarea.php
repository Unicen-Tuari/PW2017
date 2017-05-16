<?php
  require_once('bbdd.php');
  if(isset($_GET["id_tarea"])){
    $id_tarea = $_GET["id_tarea"];
    TerminarTarea($id_tarea);
  }
  header('Location: index.php');
?>
