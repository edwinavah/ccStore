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
                    <form id="delete" method="POST">
                        <input type="hidden" name="id_productos" id="delete_id">
                        <br>
                            <div id="respuesta" style="background:sandybrown; text-align:center; color:whitesmoke"></div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Cancelar</button>
                            <button type="button" id="eliminar" class="btn btn-outline-danger" data-dismiss="modal" onclick="location.reload();">Eliminar</button>
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
            
            $('#eliminar').on('click',function(){
                $.ajax({
                    url: 'assets/components/php/productos/eliminar.php',
                    type: 'POST',
                    data: $('#delete').serialize(),
                    success: function(res){
                    $('#respuesta').html(res);
                    }
                 });
            });
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
                    <form id="update" method="POST">
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
                                
                                <br>
                                <div id="respuesta1" style="background:sandybrown; text-align:center; color:whitesmoke"></div>


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-dark" data-dismiss="modal" onclick="location.reload();">Cerrar</button>
                            <button type="button" id="guardar" class="btn btn-outline-warning">Guardar cambios</button>
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

        $('#guardar').on('click',function(){
        $.ajax({
            url: 'assets/components/php/productos/editar.php',
            type: 'POST',
            data: $('#update').serialize(),
            success: function(res){
                $('#respuesta1').html(res);
            }
        });
    });
    });
</script>

<!-- Modal insertar-->
<div class="modal fade" id="insertar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="font-family: Candara;">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" style="font-size: 1.5rem;" id="exampleModalLabel">Nueva producto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="insert" method="POST">
                        <input type="hidden" name="id_productos" id="new_id">
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
                            
                            <br>
                            <div id="respuesta2" style="background:sandybrown; text-align:center; color:whitesmoke"></div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-dark" data-dismiss="modal" onclick="location.reload();">Cerrar</button>
                            <button type="button" id="guardarNew" class="btn btn-outline-warning">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
    $('#guardarNew').on('click',function(){
        $.ajax({
            url: 'assets/components/php/productos/insertar.php',
            type: 'POST',
            data: $('#insert').serialize(),
            success: function(res){
                $('#respuesta2').html(res);
            }
        });
    });
    </script>
</body>