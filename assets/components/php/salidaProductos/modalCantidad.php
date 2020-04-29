<body>
    <!-- MODAL CANTIDAD DE PRODUCTOS -->
    <div class="modal fade" id="cantidad" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" style="font-size: 1.5rem;" id="exampleModalLabel">Cantidad de Producto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    
                    <form id="update" method="POST">
                        <input type="hidden" name="id_productos" id="update_id">
                        <input type="hidden" name="codigo_barras" id="codigo_barras">
                        <input type="hidden" name="marca" id="marca">
                        <input type="hidden" name="modelo" id="modelo">
                        <div class="col">
                                    <label for="">Marque la cantidad que desee retirar</label>
                                    <input type="number" name="stock" class="form-control" id="stock" required>
                                </div>

                                <?php
                                        date_default_timezone_set('America/Mexico_City');
                                        $fechaActual = date("Y-m-d H:i:s");
                                ?>

                                <div class="col d-none">
                                     <label>Fecha de registro:</label>
                                     <input type="datetime" name="fechaRegistro" id="fechaRegistro" class="form-control" value="<?php echo $fechaActual ?>" readonly>
                                </div>
                        <br>
                            <div id="respuesta" style="background: #17a2b8; text-align: center; color: whitesmoke; font-weight: 700;"></div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Cancelar</button>
                            <button type="button" id="guardar" class="btn btn-success" data-dismiss="modal" onclick="location.reload();">Aceptar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('.cantidadbtn').on('click',function(){
            //coinsida con los mismos datos de tr
            $tr = $(this).closest('tr');
            var datos= $tr.children("td").map(function(){
                return $(this).text();
            });

            $('#update_id').val(datos[0]);
            $('#codigo_barras').val(datos[1]);
            $('#marca').val(datos[2]);
            $('#modelo').val(datos[3]);

            $('#guardar').on('click',function(){
                $.ajax({
                    url: 'assets/components/php/salidaProductos/cantidad.php',
                    type: 'POST',
                    data: $('#update').serialize(),
                    
                });
            });
        });
    </script>