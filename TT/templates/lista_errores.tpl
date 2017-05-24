{if $errores}
<div class="row">
  <h2>Errores</h2>
  <div class="col-md-4 col-md-offset-4 alert-danger">
    <ul class="list-group">
      {foreach from=$errores item=error}
          <li class="list-group-item" >
                {$error|upper}
          </li>
      {/foreach}
    </ul>
  </div>
</div>
{/if}
