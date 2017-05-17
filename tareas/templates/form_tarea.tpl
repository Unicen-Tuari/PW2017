<div class="row">
  <div class="col-md-8">
    <div class="panel panel-default">
      <div class="panel-heading">Crear Tarea</div>
      <div class="panel-body">
        <form class="form-horizontal" action="insertar_tarea.php" method="post">
          <div class="form-group">
            <label class="col-sm-2 control-label">Nombre</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="nombre" placeholder="Nombre">
            </div>
          </div>
          <div class="form-group">
            <label for="inputDescripcion" class="col-sm-2 control-label">Descripción</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="descripcion" id="inputDescripcion" placeholder="Descripción">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-default">Enviar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
