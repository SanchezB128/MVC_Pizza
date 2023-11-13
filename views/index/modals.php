<div id="addUser" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Agregar nuevo usuario</h4>
      </div>
      <div class="modal-body">
		<form name="formUser" onsubmit="register(); return false">
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="nombre" type="text" class="form-control" name="nombre" placeholder="Nombre del Ingrediente" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="descripcion" type="text" class="form-control" name="descripcion" placeholder="Descripcion" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		  	<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="precio" type="text" class="form-control" name="precio" placeholder="Precio por Unidad" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="unidad_mdd" type="text" class="form-control" name="unidad_mdd" placeholder="Unidad mdd" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="stock" type="text" class="form-control" name="stock" placeholder="Stock" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="fecha_cad" type="datetime-local" class="form-control" name="fecha_cad" placeholder="Fecha cad" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="cnt_ing" type="text" class="form-control" name="cnt_ing" placeholder="Cnt ing" required autocomplete="off">
		  </div>
		  <br>				  
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Registrar</button>
		<button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
		</form>
      </div>
    </div>
  </div>
</div>


<div id="updateUser" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Actualizar informacion Pizza </h4>        
      </div>
      <div class="modal-body">
		<form name="formUserUpdate" onsubmit="update(); return false">
		<input type="text" name="id" id="id" style="display: none;">
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="nombre" type="text" class="form-control" name="nombre" placeholder="Nombre de Pizza" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="descripcion" type="text" class="form-control" name="descripcion" placeholder="Descripcion" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		  	<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="precio" type="text" class="form-control" name="precio" placeholder="Precio" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		  	<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="unidad_mdd" type="text" class="form-control" name="unidad_mdd" placeholder="unidad_mdd" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		  	<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="stock" type="text" class="form-control" name="stock" placeholder="stock" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		  	<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="fecha_cad" type="datetime-local" class="form-control" name="fecha_cad" placeholder="fecha_cad" step="any" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		  	<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="cnt_ing" type="text" class="form-control" name="cnt_ing" placeholder="cnt_ing" required autocomplete="off">
		  </div>		 	  
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Actualizar</button>
		<button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
		</form>
      </div>
    </div>
  </div>
</div>