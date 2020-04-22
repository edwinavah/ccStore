<?php
    require_once "../conexion.php";
    $conexion = conexion();
?>

<body>
    <div class="row mt-4">
        <div class="col-sm-12">
            <div class="table-responsive-xl">
                <table class="table table-sm table-hover table-condensed table-bordered table-striped mt-3">
                    <thead>
                        <tr>
                            <td scope="col" class="text-center align-middle background-table">ID</td>
                            <td scope="col" class="text-center align-middle background-table">Foto usuario</td>
                            <td scope="col" class="text-center align-middle background-table">Nombre</td>
                            <td scope="col" class="text-center align-middle background-table">Usuario</td>
                            <td scope="col" class="text-center align-middle background-table">Tipo de usuario</td>
                            <td scope="col" class="text-center align-middle background-table">Acciones</td>
                        </tr>
                    </thead>

                    <?php
                    $sql = "SELECT * FROM usuarios ORDER BY tipoUsuario ASC";
                    $resultado = mysqli_query($conexion, $sql);

                    while ($buscar = mysqli_fetch_row($resultado)) {
                        $datos = $buscar[0]."||".
                            $buscar[1]."||".
                            $buscar[2]."||".
                            $buscar[3]."||".
                            $buscar[4]."||".
                            $buscar[5];
                    ?>

                        <tr>
                            <td class="align-middle"><?php echo $buscar[0] ?></td>
                            <td class="text-center align-middle" style="min-width: 110px; width: 110px">
                                <img src="assets/components/php/adminUsuarios/<?php echo $buscar[5] ?>" alt="" style="width: 100px; height: 100px;">
                            </td>
                            <td class="align-middle"><?php echo $buscar[1] ?></td>
                            <td class="align-middle"><?php echo $buscar[2] ?></td>
                            <td class="align-middle"><?php echo $buscar[4] ?></td>
                            <td class="text-center align-middle" style="min-width: 125px; width: 125px">
                                <button type="button" class="btn btn-sm btn-warning editarbtn" data-toggle="modal" data-target="#modificar"><i class="far fa-edit"></i> Editar</button>
                                <button type="button" class="btn btn-sm btn-danger eliminarbtn" data-toggle="modal" data-target="#eliminar"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>

                    <?php
                        }
                    ?>
                </table>
            </div>
        </div>
    </div>
</body>

<?php
    include('modalUsuario.php');
?>