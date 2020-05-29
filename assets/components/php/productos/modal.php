<?php
    require_once "../conexion.php";
    $conexion = conexion();
    session_start();
?>

<body>
    <!-- MODAL ELIMINAR -->
    <!-- onclick="location.reload();" SE ELIMINO DEL PRIMER DIV -->
    <div class="modal fade" id="eliminarProducto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" style="font-size: 1.5rem;" id="exampleModalLabel">Eliminar producto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="eliminarForm" method="POST" autocomplete="off" onsubmit="return false">
                        <label for="">¿Seguro que quieres eliminar este producto?</label>
                        <input type="number" name="eliminar_id" class="form-control mt-2 d-none" id="eliminar_id" required readonly>
                        <input type="text" name="eliminar_marca" class="form-control mt-2 d-none" id="eliminar_marca" required readonly>
                        <input type="text" name="eliminar_modelo" class="form-control mt-2" id="eliminar_modelo" required readonly>
                        <input type="number" name="eliminar_stock" class="form-control mt-2 d-none" id="eliminar_stock" required readonly>

                        <label for="" class="mt-2">Nota</label>
                        <textarea class="form-control" id="eliminar_nota" name="eliminar_nota" rows="2" placeholder="Por favor de especificar motivo de eliminación del producto." required></textarea>
                        
                        <!-- <br><div id="respuesta" style="background: #17a2b8; text-align: center; color: whitesmoke; font-weight: 700;"></div> -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Cancelar</button>
                            <button type="button" id="eliminar" class="btn btn-danger" data-dismiss="modal">Eliminar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        function eliminaProducto(datos) {
            d=datos.split('||');

            $('#eliminar_id').val(d[0]);
            $('#eliminar_marca').val(d[2]);
            $('#eliminar_modelo').val(d[3]);
            $('#eliminar_stock').val(d[5]);
        }

        $(document).ready(function () {
            $('#eliminar').on('click',function(){
                eliminar_nota = $('#eliminar_nota').val();
                if(eliminar_nota === ""){
                    alertify.alert("Inténtalo de nuevo","Es obligatorio llenar el campo nota, por favor de especificar motivo de eliminación del producto.");
                } else {
                    $.ajax({
                        url: 'assets/components/php/productos/eliminar.php',
                        type: 'POST',
                        data: $('#eliminarForm').serialize(),
                        success: function(r){
                            if(r!=1){
                                $('#productos').load('assets/components/php/productos/productos.php');
                                alertify.success("Se actualizo la contraseña correctamente");
                            } else {
                                alertify.error("Error con la conexión al servidor");
                            }
                        }
                    });
                    $('#eliminar_nota').val('');
                }
            });
        });
    </script>

    <!-- MODAL MODIFICAR PRODUCTO -->
    <div class="modal fade" id="modificar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" style="font-size: 1.5rem;" id="exampleModalLabel">Modificar producto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="update" method="POST" autocomplete="off">
                        <input type="text" class="form-control d-none" name="id_productos" id="update_id" required readonly>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col">
                                    <label for="" class="mt-2">Código de barras</label>
                                    <input type="number" name="codigo_barras" class="form-control" id="codigo_barras">
                                </div>

                                <?php
                                    if($_SESSION['tipo'] != "Administrador"){
                                        // CAMPOS NO EDITABLES PARA USUARIO
                                        echo 
                                        '<div class="col d-none">
                                            <label for="" class="mt-2">Cantidad en stock</label>
                                            <input type="number" name="stock_anterior" class="form-control" id="stock_anterior" min="0" pattern="^[0-9]+" required readonly>
                                        </div>';

                                        echo 
                                        '<div class="col d-none">
                                            <label for="" class="mt-2">Cantidad en stock</label>
                                            <input type="number" name="stock" class="form-control" id="stock" min="0" pattern="^[0-9]+" required readonly>
                                        </div>';
                                    } else {
                                        // CAMPOS EDITABLES PARA ADMINISTRADOR
                                        echo 
                                        '<div class="col d-none">
                                            <label for="" class="mt-2">Cantidad en stock</label>
                                            <input type="number" name="stock_anterior" class="form-control" id="stock_anterior" min="0" pattern="^[0-9]+" required readonly>
                                        </div>';
                                        
                                        echo 
                                        '<div class="col">
                                            <label for="" class="mt-2">Cantidad en stock</label>
                                            <input type="number" name="stock" class="form-control" id="stock" min="0" pattern="^[0-9]+" required>
                                        </div>';
                                    }
                                ?>
                                
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <label for="" class="mt-2">Marca</label>
                                    <input type="text" name="marca" class="form-control" id="marca" required>
                                </div>
                                <div class="col">
                                    <label for="" class="mt-2">Modelo</label>
                                    <input type="text" name="modelo" class="form-control" id="modelo" required>
                                </div>
                            </div>
                            <label for="" class="mt-2">Especificaciones</label>
                            <textarea class="form-control" id="especificaciones" name="especificaciones" rows="4" placeholder="Escribe algúna especificación del producto" required></textarea>
                                                       
                            <label for="" class="mt-2">Nota</label>
                            <textarea class="form-control" id="editar_nota" name="editar_nota" rows="2" placeholder="Por favor de especificar motivo de edición del producto." required></textarea>
                        
                            <br>
                            <div id="respuesta1" style="text-align: center;"></div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-dark" data-dismiss="modal" onclick="location.reload();">Cerrar</button>
                            <button type="submit" id="guardar" class="btn btn-warning">Guardar cambios</button>
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
            $('#stock_anterior').val(datos[5]);
            $('#stock').val(datos[5]);
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

    <!-- MODAL INSERTAR PRODUCTO -->
    <div class="modal fade" id="insertar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" style="font-size: 1.5rem;" id="exampleModalLabel">Nueva producto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="insert" method="POST" autocomplete="off">
                        <input type="text" class="form-control d-none" name="id_productos" id="new_id">
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col">
                                    <label for="" class="mt-2">Código de barras</label>
                                    <input type="number" name="codigo_barras" class="form-control" id="codigo_barras">
                                </div>
                                <div class="col">
                                    <label for="" class="mt-2">Cantidad en stock</label>
                                    <input type="number" name="stock" class="form-control" id="stock" min="1" pattern="^[0-9]+" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <label for="" class="mt-2">Marca</label>
                                    <input type="text" name="marca" class="form-control" id="marca" required>
                                </div>
                                <div class="col">
                                    <label for="" class="mt-2">Modelo</label>
                                    <input type="text" name="modelo" class="form-control" id="modelo" required>
                                </div>
                            </div>
                            <label for="" class="mt-2">Especificaciones</label>
                            <textarea class="form-alpha form-control" id="especificaciones" name="especificaciones" rows="4" placeholder="Escribe algúna especificación del producto" required></textarea>
                            
                            <br>
                            <div id="respuesta2" style="text-align: center;"></div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-dark" data-dismiss="modal" onclick="location.reload();">Cerrar</button>
                            <button type="submit" id="guardarNew" class="btn btn-primary">Guardar</button>
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