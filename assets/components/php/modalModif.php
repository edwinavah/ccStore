<body>
	<!-- Modal modificar-->
<div class="modal fade" id="modificar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="font-family: Candara;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" style="font-size: 1.5rem;" id="exampleModalLabel">Modificar Producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="editar.php" method="POST">
        	<input type="hidden" name="codigo" id="update_id">
            <div class="form-group"> 
                <label for="">Modelo</label>
                <input type="text" name="titulo" class="form-control" id="Etitulo">
            </div>
            <div class="form-group"> 
                <label for="">Cantidad</label>
                <input type="text" name="cuerpo" class="form-control" id="Ecuerpo">
                <label for="">Precio</label>
                <input type="text" name="cuerpo" class="form-control" id="Ecuerpo">
            </div>
            <div class="form-group"> 
                <label for="">Caracteristica</label>
                <input type="text" name="cuerpo" class="form-control" id="Ecuerpo">
            </div>
            <div class="modal-footer">
	        <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Cerrar</button>
	        <button type="submit" class="btn btn-outline-warning">Guardar Cambios</button>
	      </div>
	     </form>
      </div>
    </div>
  </div>
</div>

</body>