<?php
class ModelTareas
{
  private $db;
  function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;'
            .'dbname=db_tareas;charset=utf8',
            'root', '');
  }

  function GetTareas()
  {
    $consulta = $this->db->prepare("SELECT * FROM tarea");
    $result = $consulta->execute();
    return $consulta->fetchAll();
  }
}

 ?>
