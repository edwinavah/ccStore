<?php
    require_once "../conexion.php";
    $conexion = conexion();
    session_start();
    $usuario = $_SESSION['user'];
?>
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
                    <form id="update" method="POST" autocomplete="off" onsubmit="return false">
                        <input type="text" class="form-control d-none" name="id_productos" id="update_id" readonly>
                        <input type="text" class="form-control d-none mt-2" name="codigo_barras" id="codigo_barras" readonly>
                        <input type="text" class="form-control d-none mt-2" name="marca" id="marca" readonly>
                        <input type="text" class="form-control mt-2" name="modelo" id="modelo" readonly>
                        <input type="text" class="form-control d-none mt-2" name="stock" id="stock" readonly>

                        <label for="" class="mt-2">Ingrese la cantidad que desea retirar:</label>
                        <input type="number" name="stockDescontado" class="form-control" id="stockDescontado" min="1" pattern="^[0-9]+" required>

                        <?php
                            date_default_timezone_set('America/Mexico_City');
                            $fechaActual = date("Y-m-d H:i:s");
                            //$hora = date("H:i:s");
                        ?>
                        <div class="col d-none">
                            <label>Fecha de registro:</label>
                            <input type="datetime" name="fechaRegistro" id="fechaRegistro" class="form-control" value="<?php echo $fechaActual ?>" readonly>
                        </div>
                        <div class="col d-none">
                            <label>Usuario</label>
                            <input type="text" name="usuario" id="usuario" class="form-control" value="<?php echo $usuario ?>">
                        </div>
                                
                        <br>
                        <div id="respuesta" style="background: #17a2b8; text-align: center; color: whitesmoke; font-weight: 700;"></div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Cancelar</button>
                            <button type="submit" id="guardar" class="btn btn-success" data-dismiss="modal" onclick="location.reload();">Aceptar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

<script type="text/javascript">
    function agregaform(datos) {
        d=datos.split('||');

        $('#update_id').val(d[0]);
        $('#codigo_barras').val(d[1]);
        $('#marca').val(d[2]);
        $('#modelo').val(d[3]);
        $('#stock').val(d[5]);
    }

    $('#guardar').on('click',function(){
        $.ajax({
            url: 'assets/components/php/salidaProductos/cantidad.php',
            type: 'POST',
            data: $('#update').serialize(),
        });
    });
</script>

