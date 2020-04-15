<body>
	<!-- Modal modificar-->
    <div class="modal fade" id="eliminar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="font-family: Candara;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" style="font-size: 1.5rem;" id="exampleModalLabel">Eliminar producto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <label for="">¿Seguro que quieres eliminar un registro?</label>
                    <form action="eliminar.php" method="POST">
                        <input type="hidden" name="id" id="delete_id">
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-outline-danger">Eliminar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>