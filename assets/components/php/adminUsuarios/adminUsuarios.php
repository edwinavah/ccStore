<?php
    require_once "../conexion.php";
    $conexion = conexion();
?>

<body>
    <div class="row">
        <div class="col-sm-12">
            <div class="table-responsive-xl">
                <table class="table table-sm">
                    <thead>
                        <tr>
                            <td scope="col" class="align-middle background-table d-none">ID</td>
                            <td scope="col" class="align-middle background-table"><span class="ml-3">Perfil</span></td>
                            <td scope="col" class="align-middle background-table">Nombre</td>
                            <td scope="col" class="align-middle background-table">Usuario</td>
                            <td scope="col" class="align-middle background-table">Registro</td>
                            <td scope="col" class="align-middle background-table">Tipo de usuario</td>
                            <td scope="col" class="align-middle background-table">Acciones</td>
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
                            $buscar[5]."||".
                            $buscar[6];
                    ?>

                        <tr>
                            <td class="align-middle d-none"><?php echo $buscar[0] ?></td>
                            <td class="align-middle" style="min-width: 150px; width: 150px">
                                <span class="ml-3">
                                    <img src="assets/components/php/adminUsuarios/<?php echo $buscar[6] ?>" alt="" style="width: 70px; height: 70px; border-radius: 50%;">
                                </span>
                            </td>
                            <td class="align-middle"><?php echo $buscar[1] ?></td>
                            <td class="align-middle"><?php echo $buscar[2] ?></td>
                            <td class="align-middle"><?php echo $buscar[4] ?></td>
                            <td class="align-middle"><?php echo $buscar[5] ?></td>
                            <td class="text-center align-middle" style="min-width: 105px; width: 105px">
                                <button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modificar"><i class="far fa-edit"></i> Editar</button>
                                <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#eliminar"><i class="fas fa-trash"></i></button>
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