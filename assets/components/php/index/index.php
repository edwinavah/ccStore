<!-- MODAL CONTENIDO -->
<div class="modal-dialog text-center">
    <div class="col-md-10 main-section">
        <div class="modal-content">
            <!-- IMAGEN DE USUARIO -->
            <div class="col-12 user-img">
                <img src="assets/images/logo.svg" />
            </div>
            <!-- FORMULARIO -->
            <form class="col-12" id="entrar" action="assets/components/php/index/iniciarSesion.php" method="POST">
                <div class="user-icono">
                    <input type="text" placeholder="Nombre de Usuario" id="usuario" name="usuario" required>
                </div>
                <div class="password-icono">
                    <input type="password" placeholder="Contraseña" id="contrasena" name="contrasena" required>
                </div>

                            <div id="respuesta3" style="text-align: center;"></div>

                <div class="row mb-4">
                    <div class="col-12">
                        <button type="sumbit" class="btn btn-primary" id="buttonlg"><i class="fas fa-sign-in-alt"></i> Entrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $(function() {
        $("#entrar").validate({
        rules: {
            usuario: {
                required: true 
            },
            contrasena: "required"
            },
        messages: {
            usuario: {
                required: "Please enter some data"
                },
                contrasena: "Please provide some data"
                }
        });
    });
    </script>