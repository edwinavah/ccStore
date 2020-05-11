<!-- MODAL DHL -->
<div class="modal fade" id="btnDHL" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <img src="assets/images/DHL.png" alt="" style="width: 170px; height: auto;">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" autocomplete="off" onsubmit="return false">
                    <input type="text" class="form-control mt-2" name="guiaDHL" id="guiaDHL" placeholder="Escanea el número de guía aquí" maxlength="10" required>
                    <button type="submit" id="guardarDHL" class="btn btn-warning d-none">Guardar</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $('#guardarDHL').click(function () {
            guiaDHL = $('#guiaDHL').val();

            if(guiaDHL === ""){
                alertify.alert("Rellene los campos","¡Es obligatorio ingresar un número de guía!");
            } else {
                agregarDatosDHL(guiaDHL);
                $('#guiaDHL').val('');
            }
        });
    });
    
    function agregarDatosDHL(guiaDHL) {
        cadena = "guiaDHL=" + guiaDHL;

        $.ajax({
            type:"post",
            url:"assets/components/php/guias/insertarDHL.php",
            data:cadena,
            success:function(r) {
                if(r==1){
                    alertify.success("¡Se agrego con éxito el número de guía!");
                }
                else{
                    alertify.alert("Error","¡El número de guía ingresado ya existe!");
                    alertify.error("¡El número de guía ingresado ya existe!");
                }
            }
        });
    }
</script>

<!-- MODAL FEDEX -->
<div class="modal fade" id="btnFedEx" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <img src="assets/images/FedEx.png" alt="" style="width: 170px; height: auto;">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" autocomplete="off" onsubmit="return false">
                    <input type="text" class="form-control mt-2" name="guiaFedEx" id="guiaFedEx" placeholder="Escanea el número de guía aquí" maxlength="10" required>
                    <button type="submit" id="guardarFedEx" class="btn btn-dark d-none">Guardar</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $('#guardarFedEx').click(function () {
            guiaFedEx = $('#guiaFedEx').val();

            if(guiaFedEx === ""){
                alertify.alert("Rellene los campos","¡Es obligatorio ingresar un número de guía!");
            } else {
                agregarDatosFedEx(guiaFedEx);
                $('#guiaFedEx').val('');
            }
        });
    });
    
    function agregarDatosFedEx(guiaFedEx) {
        cadena = "guiaFedEx=" + guiaFedEx;

        $.ajax({
            type:"post",
            url:"assets/components/php/guias/insertarFedEx.php",
            data:cadena,
            success:function(r) {
                if(r==1){
                    alertify.success("¡Se agrego con éxito el número de guía!");
                }
                else{
                    alertify.alert("Error","¡El número de guía ingresado ya existe!");
                    alertify.error("¡El número de guía ingresado ya existe!");
                }
            }
        });
    }
</script>

<!-- MODAL ESTAFETA -->
<div class="modal fade" id="btnEstafeta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <img src="assets/images/Estafeta.png" alt="" style="width: 170px; height: auto;">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" autocomplete="off" onsubmit="return false">
                    <input type="text" class="form-control mt-2" name="guiaEstafeta" id="guiaEstafeta" placeholder="Escanea el número de guía aquí" maxlength="10" required>
                    <button type="submit" id="guardarEstafeta" class="btn btn-danger d-none">Guardar</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $('#guardarEstafeta').click(function () {
            guiaEstafeta = $('#guiaEstafeta').val();

            if(guiaEstafeta === ""){
                alertify.alert("Rellene los campos","¡Es obligatorio ingresar un número de guía!");
            } else {
                agregarDatosEstafeta(guiaEstafeta);
                $('#guiaEstafeta').val('');
            }
        });
    });
    
    function agregarDatosEstafeta(guiaEstafeta) {
        cadena = "guiaEstafeta=" + guiaEstafeta;

        $.ajax({
            type:"post",
            url:"assets/components/php/guias/insertarEstafeta.php",
            data:cadena,
            success:function(r) {
                if(r==1){
                    alertify.success("¡Se agrego con éxito el número de guía!");
                }
                else{
                    alertify.alert("Error","¡El número de guía ingresado ya existe!");
                    alertify.error("¡El número de guía ingresado ya existe!");
                }
            }
        });
    }
</script>

<!-- MODAL OTROS -->
<div class="modal fade" id="btnOtros" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="font-size: 1.5rem;" id="exampleModalLabel">Escanea el número de guía</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" autocomplete="off" onsubmit="return false">
                    <input type="text" class="form-control mt-2" name="guiaOtros" id="guiaOtros" placeholder="Escanea el número de guía aquí" maxlength="10" required>
                    <select type="text" class="form-control mt-2" name="empresa_paqueteria" id="empresa_paqueteria" required>
                        <option selected></option>
                        <option value="USPS">USPS</option>
                        <option value="PaqueteExpress">PaqueteExpress</option>
                        <option value="Redpack">Redpack</option>
                        <option value="Correos de méxico">Correos de méxico</option>
                        <option value="Envia Express (Estrella blanca)">Envia Express (Estrella blanca)</option>
                    </select>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Cerrar</button>
                <button type="submit" id="guardarOtros" class="btn btn-info">Guardar</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $('#guardarOtros').click(function () {
            guiaOtros = $('#guiaOtros').val();
            empresa_paqueteria = $('#empresa_paqueteria').val();

            if(guiaOtros === ""){
                alertify.alert("Rellene los campos","¡Es obligatorio ingresar un número de guía!");
            } if(empresa_paqueteria === ""){
                alertify.alert("Rellene los campos","¡Es obligatorio seleccionar la paquetería!");
            } else {
                agregarDatosEstafeta(guiaOtros,empresa_paqueteria);
                $('#guiaOtros').val('');
                $('#empresa_paqueteria').val('');
            }
        });
    });
    
    function agregarDatosEstafeta(guiaOtros,empresa_paqueteria) {
        cadena = "guiaOtros=" + guiaOtros + "&empresa_paqueteria=" + empresa_paqueteria;

        $.ajax({
            type:"post",
            url:"assets/components/php/guias/insertarOtros.php",
            data:cadena,
            success:function(r) {
                if(r==1){
                    alertify.success("¡Se agrego con éxito el número de guía!");
                }
                else{
                    alertify.alert("Error","¡El número de guía ingresado ya existe!");
                    alertify.error("¡El número de guía ingresado ya existe!");
                }
            }
        });
    }
</script>