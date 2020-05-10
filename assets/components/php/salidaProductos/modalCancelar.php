<?php
    require_once "../conexion.php";
    $conexion = conexion();
    session_start();
    $usuario = $_SESSION['user'];
?>
<body>
<!-- MODAL CANCELAR -->
    <div class="modal fade" id="cancelar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" style="font-size: 1.5rem;" id="exampleModalLabel">Eliminar producto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <label for="">¿Seguro que quieres eliminar este producto?</label>
                    <form id="delete" method="POST" onsubmit="return false">
                        <input type="number" name="delete_id" class="form-control mt-2 " id="delete_id" required readonly>
                        <input type="text" name="delete_marca" class="form-control mt-2 d-none" id="delete_marca" required readonly>
                        <input type="text" name="delete_modelo" class="form-control mt-2" id="delete_modelo" required readonly>
                        <input type="text" name="stockDescontado" class="form-control mt-2 " id="stockDescontado" required readonly>
                        <br>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Cancelar</button>
                            <button type="button" id="eliminar" class="btn btn-danger" data-dismiss="modal" onclick="location.reload();">Eliminar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
    <script type="text/javascript">
        function agregaform1(datos) {
            d=datos.split('||');

            $('#delete_id').val(d[0]);
            $('#delete_marca').val(d[2]);
            $('#delete_modelo').val(d[1]);
            $('#stockDescontado').val(d[3]);
        }

        $('#eliminar').on('click',function(){
            $.ajax({
                url: 'assets/components/php/salidaProductos/cantidad.php',
                type: 'POST',
                data: $('#delete').serialize(),
            });
        });
</script>