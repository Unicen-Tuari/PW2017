{config_load file="test.conf" section="setup"}
{include file="header.tpl" title=foo}

<ul class="list-group">
  {foreach $tareas as $fila}
      <li class="list-group-item" >
          { $fila['nombre'] }
          <a href="borrar_tarea.php?id_tarea={$fila['id_tarea']}">Borrar</a>
          <a href="terminar_tarea.php?id_tarea={$fila['id_tarea']}">Terminada</a>
          <a href="detalle_tarea.php?id_tarea={$fila['id_tarea']}">Ver detalles</a>
    </li>
  {/foreach}
</ul>
{include file="form_tarea.tpl"}
{include file="footer.tpl"}
