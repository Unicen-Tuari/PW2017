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
  function GetTarea($id_tarea)
  {
    $db = Conectar();
    $consulta = $db->prepare("SELECT * FROM tarea WHERE id_tarea = ?");
    $result = $consulta->execute(array($id_tarea));
    //Devuelvo una sola porque el WHERE es por la clave primaria
    return $consulta->fetch();
  }
  function TerminarTarea($id_tarea)
  {
    $db = Conectar();
      $sentencia = $db->prepare("UPDATE tarea SET terminada=true WHERE id_tarea=?");
    $sentencia->execute(array($id_tarea));
  }
?>
