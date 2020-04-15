<body>
    <!-- Modal eliminar-->
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
                        <input type="hidden" name="id_productos" id="delete_id">
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-outline-danger">Eliminar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('.eliminarbtn').on('click', function() {
            //coinsida con los mismos datos de tr
            //con closest
            $tr = $(this).closest('tr');
            var datos = $tr.children("td").map(function() {
                return $(this).text();
            });
            $('#delete_id').val(datos[0]);
        });
    </script>

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
                        <input type="hidden" name="id_productos" id="update_id">
                        <div class="form-group">
                            <label for="" class="mt-2">Código de barras</label>
                            <input type="text" name="codigo_barras" class="form-control" id="codigo_barras">

                            <div class="form-row">
                                <div class="col">
                                    <label for="" class="mt-2">Marca</label>
                                    <input type="text" name="marca" class="form-control" id="marca">
                                </div>
                                <div class="col">
                                    <label for="" class="mt-2">Modelo</label>
                                    <input type="text" name="modelo" class="form-control" id="modelo">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <label for="" class="mt-2">Cantidad</label>
                                    <input type="text" name="stock" class="form-control" id="stock">
                                </div>
                                <div class="col">
                                    <label for="" class="mt-2">Precio</label>
                                    <input type="number" placeholder="0.00" step="0.01" name="precio" class="form-control" id="precio">
                                </div>
                            </div>
                            <label for="" class="mt-2">Especificaciones</label>
                            <textarea class="form-alpha form-control" id="especificaciones" name="especificaciones" rows="4" placeholder="Escribe algúna especificación del producto"></textarea>
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

    <script>
	$('.editarbtn').on('click',function(){
		//coinsida con los mismos datos de tr
		$tr = $(this).closest('tr');
		var datos= $tr.children("td").map(function(){
			return $(this).text();
		});
		$('#update_id').val(datos[0]);
		$('#codigo_barras').val(datos[1]);
		$('#marca').val(datos[2]);
        $('#modelo').val(datos[3]);
        $('#stock').val(datos[6]);
        $('#precio').val(datos[5]);
        $('#especificaciones').val(datos[4]);
	});
</script>

</body>