<div class="row mt-3">
    <div class="col-12">
        <form action="assets/components/php/guias/eliminarDatosReporte.php" method="POST">
            <div class="form-group">
                <div class="form-row">
                    <div class="col">
                        <div class="input-group pull-left">
                            <span class="input-group-addon mt-2 mr-2" id="basic-addon1">Desde:</span>
                            <input type="date" name="desde" class="form-control" id="desde" required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="input-group pull-left">
                            <span class="input-group-addon mt-2 mr-2" id="basic-addon1">Hasta:</span>
                            <input type="date" name="hasta" class="form-control" id="hasta" required>
                        </div>
                    </div>
                    <div class="col">
                        <select type="text" class="form-control" name="empresa" id="empresa" required>
                            <option selected></option>
                            <option value="guias_dhl">DHL</option>
                            <option value="guias_fedex">FedEx</option>
                            <option value="guias_estafeta">Estafeta</option>
                        </select>
                    </div>
                    <div class="col">
                        <button type="submit" id="btnEli" class="btn btn-dark text-white">Eliminar Guías <i class="fas fa-trash"></i></button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('#btnEli').click(function(){
            $('#alerta').show('fade');
        })
    });
</script>