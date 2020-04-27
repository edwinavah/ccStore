<body>
    <!-- MODAL ELIMINAR USUARIO -->
    <div class="modal fade" id="eliminarUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" style="font-size: 1.5rem;" id="exampleModalLabel">Eliminar Usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="delete" method="POST">
                        <label for="">¿Seguro que quieres eliminar el usuario?</label>
                        <input type="hidden" name="id_usuarios" id="delete_id">

                        <div class="col d-none">
                            <label for="" class="mt-2">Archivo:</label>
                            <input type="text" name="archivo" class="form-control" id="archivo" readonly>
                        </div>

                        <br><div id="respuesta" style="background: #17a2b8; text-align: center; color: whitesmoke; font-weight: 700;"></div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Cancelar</button>
                            <button type="button" id="eliminar" class="btn btn-danger" data-dismiss="modal" onclick="location.reload();">Eliminar</button>
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
            $('#archivo').val(datos[2]);

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
    <div class="modal fade" id="modificarUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" style="font-size: 1.5rem;" id="exampleModalLabel">Modificar Usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="update" action="assets/components/php/adminUsuarios/editar.php" method="POST" autocomplete="off" enctype="multipart/form-data">
                        <input type="hidden" name="id_usuarios" id="id_usuarios" readonly>
                        <div class="form-group">
                            <div class="form-row d-none">
                                <div class="col">
                                    <label for="" class="mt-2">Perfil:</label>
                                    <input type="text" name="perfil" class="form-control" id="perfil" readonly>
                                </div>
                                <div class="col">
                                    <label for="" class="mt-2">Archivo:</label>
                                    <input type="text" name="archivo" class="form-control" id="archivo" readonly>
                                </div>
                            </div>
                            
                            <label for="" class="mt-2">Nombre de Usuario:</label>
                            <input type="text" name="nombre" class="form-control" id="nombre" required>

                            <div class="form-row mt-2">
                                <div class="col">
                                    <label for="">Usuario:</label>
                                    <input type="text" name="usuario" class="form-control" id="usuario" required>
                                </div>
                                <div class="col">
                                    <label>Tipo de usuario:</label>
                                    <select type="text" class="form-control" name="tipoUsuario" id="tipoUsuario" required>
                                        <option selected></option>
                                        <option value="Usuario">Usuario</option>
                                        <option value="Administrador">Administrador</option>
                                    </select>
                                </div>
                            </div>

                            <label for="" class="mt-2 d-none">Fecha registro:</label>
                            <input type="text" name="fechaRegistro" class="form-control d-none" id="fechaRegistro" readonly>

                            <div class="form-group mt-3">
                                <label for="">Nueva foto de usuario:</label>
                                <input type="file" name="file" id="archivo" accept="image/*">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-dark" data-dismiss="modal" onclick="location.reload();">Cerrar</button>
                            <button type="submit" id="guardar" class="btn btn-warning">Guardar cambios</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('.editarbtn').on('click',function(){
            //coinsida con los mismos datos de tr
            $tr = $(this).closest('tr');
            var datos= $tr.children("td").map(function(){
                return $(this).text();
            });

            $('#id_usuarios').val(datos[0]);
            $('#perfil').val(datos[1]);
            $('#archivo').val(datos[2]);
            $('#nombre').val(datos[3]);
            $('#usuario').val(datos[4]);
            $('#fechaRegistro').val(datos[6]);
            $('#tipoUsuario').val(datos[7]);

            $('#guardar').on('click',function(){
                $.ajax({
                    url: 'assets/components/php/adminUsuarios/editar.php',
                    type: 'POST',
                    data: $('#update').serialize(),
                    success: function(res){
                        // $('#respuesta1').html(res);
                    }
                });
            });
        });
    </script>

    <!-- MODAL CAMBIAR CONTRASEÑA USUARIO -->
    <div class="modal fade" id="cambiarContrasena" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" style="font-size: 1.5rem;" id="exampleModalLabel">Cambiar Contraseña</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="updateContrasena" method="POST" autocomplete="off">
                        <input type="hidden" name="id_usuariosContrasena" id="id_usuariosContrasena" readonly>
                        <div class="form-group">
                            <label for="">Nueva contraseña:</label>
                            <input type="password" name="nuevaContrasena" class="form-control" id="nuevaContrasena" required>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-dark" data-dismiss="modal" onclick="location.reload();">Cerrar</button>
                            <button type="submit" id="cambiar" class="btn btn-warning">Guardar cambios</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('.contrasenabtn').on('click',function(){
            //coinsida con los mismos datos de tr
            $tr = $(this).closest('tr');
            var datos= $tr.children("td").map(function(){
                return $(this).text();
            });

            $('#id_usuariosContrasena').val(datos[0]);
            // $('#nuevaContrasena').val(datos[5]);

            $('#cambiar').on('click',function(){
                $.ajax({
                    url: 'assets/components/php/adminUsuarios/editarContrasena.php',
                    type: 'POST',
                    data: $('#updateContrasena').serialize(),
                    success: function(res){
                        // $('#respuesta2').html(res);
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
                    <h5 class="modal-title" style="font-size: 1.5rem;" id="exampleModalLabel">Crear Usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="assets/components/php/adminUsuarios/nuevoUsuario.php" method="POST" autocomplete="off" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-12">
                                <label>Nombre completo:</label>
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

                                    <?php
                                        ini_set('date.timezone', 'America/Mexico_City');
                                        $fechaActual = date("d-m-Y");
                                    ?>

                                    <div class="col d-none">
                                        <label>Fecha de registro:</label>
                                        <input type="text" name="fechaRegistro" id="fechaRegistro" class="form-control" value="<?php echo $fechaActual ?>" readonly>
                                    </div>
                
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
                                    <label for="">Foto de usuario:</label>
                                    <input type="file" name="file" id="archivo" required accept="image/*">
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