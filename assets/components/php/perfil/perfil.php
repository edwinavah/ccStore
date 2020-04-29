<?php
    require_once "../conexion.php";
    $conexion = conexion();
    session_start();
    $id = $_SESSION['id'];
    $nombre = $_SESSION['name'];
    $usuario = $_SESSION['user'];
    $img = $_SESSION['profile'];
?>

<style>
    .info{
        background: #ffffff;
        box-shadow: 0px 0px 3px #848484;
    }
</style>

<div class="row mt-3 pt-2 info">
    <div class="col-12 text-center mt-2">
        <img src="assets/components/php/adminUsuarios/<?php echo $img ?>" alt="" style="width: 250px; height: 250px; border-radius: 50%;">
    </div>
    <div class="col-12 border-bottom">
        <h5 style="font-size: 1.5rem;">Información personal</h5 style="font-size: 1.5rem;">
    </div>
    <div class="col-12">
        <form id="updateContrasena" method="POST" autocomplete="off" onsubmit="return false">
            <div class="form-group">
                <div class="form-row mt-2">
                    <div class="col d-none">
                        <label for="">ID:</label>
                        <input type="text" name="id_usuarios" class="form-control" id="id_usuarios" value="<?php echo $id ?>" readonly>
                    </div>
                    <div class="col">
                        <label for="">Nombre completo:</label>
                        <input type="text" name="nombre_completo" class="form-control" id="nombre_completo" value="<?php echo $nombre ?>" readonly>
                    </div>
                    <div class="col">
                        <label for="">Nombre de usuario:</label>
                        <input type="text" name="usuario" class="form-control" id="usuario" value="<?php echo $usuario ?>" readonly>
                    </div>
                </div>

                <div>
                    <h5 class="mt-3" style="font-size: 1.5rem;">Cambiar contraseña</h5>
                </div>
                
                <label class="mt-2" for="">Nueva contraseña:</label>
                <input type="password" name="contrasena" class="form-control" id="contrasena" required>

                <label class="mt-2" for="">Confirmar contraseña:</label>
                <input type="password" name="confirmar_contrasena" class="form-control" id="confirmar_contrasena" required>
            </div>
            <div class="text-center mb-3">
                <button type="submit" id="guardar" class="btn btn-primary">Guardar cambios</button>
            </div>
        </form>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $("#confirmar_contrasena").focusout(function (){
            contrasena = $('#contrasena').val();
            confirmar_contrasena = $('#confirmar_contrasena').val();

            if(contrasena != confirmar_contrasena){
                document.getElementById('contrasena').style.borderColor = 'red';
                document.getElementById('confirmar_contrasena').style.borderColor = 'red';
                document.getElementById('guardar').disabled = true;
                alertify.error("Las contraseñas no coinciden, intente de nuevo");
                contrasena = $('#contrasena').val("");
                confirmar_contrasena = $('#confirmar_contrasena').val("");
            } else if (contrasena === "" || confirmar_contrasena === ""){
                document.getElementById('contrasena').style.borderColor = 'red';
                document.getElementById('confirmar_contrasena').style.borderColor = 'red';
                document.getElementById('guardar').disabled = true;
                alertify.warning("Los campos no pueden estar vacíos");
                contrasena = $('#contrasena').val("");
                confirmar_contrasena = $('#confirmar_contrasena').val("");
            } else {
                document.getElementById('contrasena').style.borderColor = 'green';
                document.getElementById('confirmar_contrasena').style.borderColor = 'green';
                document.getElementById('guardar').disabled = false;
                $('#guardar').on('click',function(){
                    $.ajax({
                        url: 'assets/components/php/perfil/editarContrasena.php',
                        type: 'POST',
                        data: $('#updateContrasena').serialize(),
                        success: function(res){
                            if(res!=1){
                                $('#perfil').load('assets/components/php/perfil/perfil.php');
                                alertify.success("Se actualizo la contraseña correctamente");
                            } else {
                                alertify.error("Error con la conexión al servidor");
                            }
                            
                        }
                    });
                });
            }
        });
    });
</script>