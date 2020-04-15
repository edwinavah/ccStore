<body>
	<!-- Modal modificar-->
    <div class="modal fade" id="modificar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="font-family: Candara;">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" style="font-size: 1.5rem;" id="exampleModalLabel">Modificar producto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <form action="editar.php" method="POST">
                        <input type="hidden" name="codigo" id="update_id">
                        <div class="form-group"> 
                            <label for="" class="mt-2">Código de barras</label>
                            <input type="text" name="titulo" class="form-control" id="Ecuerpo">
                            
                            <div class="form-row">
                                <div class="col">
                                    <label for="" class="mt-2">Marca</label>
                                    <input type="text" name="cuerpo" class="form-control" id="Ecuerpo">
                                </div>
                                <div class="col">
                                    <label for="" class="mt-2">Modelo</label>
                                    <input type="text" name="cuerpo" class="form-control" id="Ecuerpo">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col">
                                    <label for="" class="mt-2">Cantidad</label>
                                    <input type="text" name="cuerpo" class="form-control" id="Ecuerpo">
                                </div>
                                <div class="col">
                                    <label for="" class="mt-2">Precio</label>
                                    <input type="number" placeholder="0.00" step="0.01" name="Ecuerpo" class="form-control" id="Ecuerpo">
                                </div>
                            </div>

                            <label for="" class="mt-2">Especificaciones</label>
                            <textarea class="form-alpha form-control" id="Ecuerpo" name="Ecuerpo" rows="4" placeholder="Escribe algúna especificación del producto"></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-outline-warning">Guardar cambios</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>