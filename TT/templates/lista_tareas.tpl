{include file="header.tpl" title=foo}

<div class="row">
  <div class="col-md-4 col-md-offset-4">
    <ul class="list-group">
      {foreach from=$tareas item=tarea}
          <li class="list-group-item" >
              {if $tarea['terminada']}
                <span class="finished">{$tarea['nombre']|upper}</span>
              {else}
                <span>{$tarea['nombre']|upper}</span>
              {/if}
              <a href="http://localhost/PW2017/TT/tarea/borrar/{$tarea['id_tarea']}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
              <a href="http://localhost/PW2017/TT/tarea/terminada/{$tarea['id_tarea']}"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></a>
              <a href="http://localhost/PW2017/TT/tarea/detalle/{$tarea['id_tarea']}"><span class="glyphicon glyphicon-list" aria-hidden="true"></span></a>
        </li>
      {/foreach}
    </ul>
  </div>
</div>
{include file="lista_errores.tpl"}
{include file="form_tarea.tpl"}
{include file="footer.tpl"}
