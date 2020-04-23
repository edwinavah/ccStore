<!-- MODAL CONTENIDO -->
<div class="modal-dialog text-center">
    <div class="col-md-10 main-section">
        <div class="modal-content">
            <!-- IMAGEN DE USUARIO -->
            <div class="col-12 user-img">
                <img src="assets/images/logo.svg" />
            </div>
            <!-- FORMULARIO -->
            <form class="col-12" id="entrar" method="POST">
                <div class="user-icono">
                    <input type="text" placeholder="Nombre de Usuario" id="usuario" name="usuario" require>
                </div>
                <div class="password-icono">
                    <input type="password" placeholder="Contraseña" id="contrasena" name="contrasena" require>
                </div>

                            <div id="respuesta3" style="text-align: center;"></div>

                <div class="row mb-4">
                    <div class="col-12">
                        <button type="button" class="btn btn-primary" id="buttonlg"><i class="fas fa-sign-in-alt"></i> Entrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    
    $('#buttonlg').on('click',function(){
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
        $.ajax({
            url: 'assets/components/php/index/iniciarSesion.php',
            type: 'POST',
            data: $('#entrar').serialize(),
            success: function(res){
                $('#respuesta3').html(res);
            }
        }).done(function(data){
            //limpia los campos despues de hacer la peticion 
            $('#entrar').trigger("reset");
        });
    });

    </script>
