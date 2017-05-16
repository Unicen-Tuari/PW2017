<?php
  function Conectar()
  {
    return new PDO('mysql:host=localhost;'
            .'dbname=db_tareas;charset=utf8',
            'root', '');
  }
  function InsertarTarea($nombre, $descripcion)
  {
    $db = Conectar();
    $consulta = $db->prepare("INSERT INTO tarea (nombre, descripcion) ".
                "VALUES (?,?)");
    $result = $consulta->execute(array($nombre,$descripcion));
    //muestra errores por pantalla
    //var_dump($consulta->errorInfo());
  }
  function GetTareas()
  {
    $db = Conectar();
    $consulta = $db->prepare("SELECT * FROM tarea");
    $result = $consulta->execute();
    return $consulta->fetchAll();
  }
  function BorrarTarea($id_tarea)
  {
    $db = Conectar();
    $sentencia = $db->prepare("delete from tarea where id_tarea=?");
    $sentencia->execute(array($id_tarea));
  }
?>
