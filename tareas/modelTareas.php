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

  function InsertarTarea($nombre, $descripcion)
  {
    $consulta = $this->db->prepare("INSERT INTO tarea (nombre, descripcion) ".
                "VALUES (?,?)");
    $result = $consulta->execute(array($nombre,$descripcion));
    //muestra errores por pantalla
    //var_dump($consulta->errorInfo());
  }

  function BorrarTarea($id_tarea)
  {
    $sentencia = $this->db->prepare("DELETE FROM tarea WHERE id_tarea=?");
    $sentencia->execute(array($id_tarea));
  }

  function TerminarTarea($id_tarea)
  {
    $sentencia = $this->db->prepare("UPDATE tarea SET terminada=true WHERE id_tarea=?");
    $sentencia->execute(array($id_tarea));
  }
}

 ?>
