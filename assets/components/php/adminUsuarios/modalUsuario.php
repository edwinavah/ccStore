<body>
    <!-- MODAL ELIMINAR USUARIO -->
    <div class="modal fade" id="eliminarUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="font-family: Candara;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" style="font-size: 1.5rem;" id="exampleModalLabel">Eliminar Usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <label for="">¿Seguro que quieres eliminar usuario?</label>
                    <form id="delete" method="POST">
                        <input type="hidden" name="id_usuarios" id="delete_id">
                        <br>
                        <div id="respuesta" style="background:sandybrown; text-align:center; color:whitesmoke"></div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Cancelar</button>
                            <button type="button" id="eliminar" class="btn btn-outline-danger" data-dismiss="modal" onclick="location.reload();">Eliminar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('.eliminarbtn').on('click', function() {
            //coinsida con los mismos datos de tr
            //con closest
            $tr = $(this).closest('tr');
            var datos = $tr.children("td").map(function() {
                return $(this).text();
            });
            $('#delete_id').val(datos[0]);

            $('#eliminar').on('click', function() {
                $.ajax({
                    url: 'assets/components/php/adminUsuarios/eliminar.php',
                    type: 'POST',
                    data: $('#delete').serialize(),
                    success: function(res) {
                        $('#respuesta').html(res);
                    }
                });
            });
        });
    </script>

    <!-- MODAL MODIFICAR USUARIO -->
    <div class="modal fade" id="modificarUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="font-family: Candara;">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" style="font-size: 1.5rem;" id="exampleModalLabel">Modificar Usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="update" method="POST">
                        <input type="hidden" name="id_usuarios" id="update_id">
                        <div class="form-group">
                            <label for="" class="mt-2">Nombre de Usuario</label>
                            <input type="text" name="nombre" class="form-control" id="nombre"><?php echo $registros['usuario'] ?>

                            <div class="form-row">
                                <div class="col">
                                    <label for="" class="mt-2">Usuario</label>
                                    <input type="text" name="usuario" class="form-control" id="usuario">
                                </div>
                                <div class="col">
                                    <label for="" class="mt-2">Contraseña</label>
                                    <input type="text" name="contraseña" class="form-control" id="contraseña">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <label for="" class="mt-2">Tipo de Usuario</label>
                                    <input type="text" name="tipo_usuario" class="form-control" id="tipo_usuario">
                                </div>
                            </div>

                            <br>
                            <div id="respuesta1" style="background:sandybrown; text-align:center; color:whitesmoke"></div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-dark" data-dismiss="modal" onclick="location.reload();">Cerrar</button>
                            <button type="button" id="guardar" class="btn btn-outline-warning">Guardar cambios</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('.editarbtn').on('click', function() {
            //coinsida con los mismos datos de tr
            $tr = $(this).closest('tr');
            var datos = $tr.children("td").map(function() {
                return $(this).text();
            });
            $('#update_id').val(datos[0]);
            $('#nombre').val(datos[1]);
            $('#usuario').val(datos[2]);
            $('#contraseña').val(datos[3]);
            $('#tipo_usuario').val(datos[4]);

            $('#guardar').on('click', function() {
                $.ajax({
                    url: 'assets/components/php/adminUsuarios/editar.php',
                    type: 'POST',
                    data: $('#update').serialize(),
                    success: function(res) {
                        $('#respuesta1').html(res);
                    }
                });
            });
        });
    </script>
    
    <!-- MODAL INSERTAR USUARIO -->
    <div class="modal fade" id="insertarUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" style="font-size: 1.5rem;" id="exampleModalLabel">Crear nuevo usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="assets/components/php/adminUsuarios/nuevoUsuario.php" method="POST" autocomplete="off" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-12">
                                <label class="mt-3">Nombre completo:</label>
                                <input type="text" name="nombre" id="nombre" class="form-control" required>
                
                                <div class="form-row mt-2">
                                    <div class="col">
                                        <label>Nombre de usuario:</label>
                                        <input type="text" name="usuario" id="usuario" class="form-control" required>
                                    </div>
                                    <div class="col">
                                        <label>Contraseña:</label>
                                        <input type="password" name="contrasena" id="contrasena" class="form-control" required>
                                    </div>
                
                                    <!-- <div class="col">
                                        <label>Tipo de usuario:</label>
                                        <input type="text" name="tipoUsuario" class="form-control">
                                    </div> -->
                
                                    <div class="col">
                                        <label>Tipo de usuario:</label>
                                        <select type="text" class="form-control" name="tipoUsuario" id="tipoUsuario" required>
                                            <option selected></option>
                                            <option value="Usuario">Usuario</option>
                                            <option value="Administrador">Administrador</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="form-group mt-3">
                                    <label for="">Imagen de usuario:</label>
                                    <input type="file" name="file" id="archivo" required>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-dark" data-dismiss="modal" onclick="location.reload();">Cerrar</button>
                            <input type="submit" id="btn-crear" class="btn btn-success m-2" value="Crear Usuario">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>