<?php
  require_once('bbdd.php');
  if(isset($_POST["nombre"]) && strlen(trim($_POST["nombre"])) > 0)
  {
    $nombre = $_POST["nombre"];
    $descripcion = $_POST["descripcion"];
    InsertarTarea($nombre, $descripcion);
  }
  header('Location: index.php');
?>
