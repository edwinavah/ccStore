<div class="row mt-3">
    <div class="col-12">
        <form action="assets/components/php/salidaProductos/reporteSalida.php" method="POST" target="_blank">
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
                        <button type="submit" class="btn btn-danger text-white">Exportar PDF <i class="fas fa-file-pdf"></i></button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>