<?php
$db = new PDO('mysql:host=localhost;'
        .'dbname=db_tareas;charset=utf8',
        'root', '');
$nombre = "Tarea1";
$descripcion = "Desc1";
echo "Ejecutando";
error_reporting(E_ALL);
ini_set('display_errors',1);
$c = $db->prepare("INSERT INTO `tarea`(`id_tarea`,`nombre`, `descripcion`)".
        " VALUES (2,`".$nombre."`,`".$descripcion."`)");
$c->execute();
