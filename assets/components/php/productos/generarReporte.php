<div class="row">
    <div class="col-12">
        <form id="reporteProductos" name="reporteProductos" method="POST" target="_blank">
            <div class="form-group">
                <div class="form-row">
                    <div class="col">
                        <input class="btn btn-danger text-white" type="button" target="_blank" value="Exportar PDF" 
                        onclick= "document.reporteProductos.action = 'assets/components/php/productos/reportePDF.php'; 
                        document.reporteProductos.submit()" />

                        <input class="btn btn-success text-white" type="button" value="Exportar EXCEL"
                        onclick= "document.reporteProductos.action = 'assets/components/php/productos/reporteExcel.php'; 
                        document.reporteProductos.submit()" />
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>