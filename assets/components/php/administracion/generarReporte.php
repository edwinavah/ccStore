<div class="row mt-3">
    <div class="col-12">
        <form id="reporteAdmin" name="reporteAdmin" method="POST" target="_blank">
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
                        
                        <input class="btn btn-danger text-white" type="button" target="_blank" value="Exportar PDF" 
                        onclick= "document.reporteAdmin.action = 'assets/components/php/administracion/reportePDFadmin.php'; 
                        document.reporteAdmin.submit()" />

                        <input class="btn btn-success text-white" type="button" value="Exportar EXCEL"
                        onclick= "document.reporteAdmin.action = 'assets/components/php/administracion/reporteExcelAdmin.php'; 
                        document.reporteAdmin.submit()" />
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>