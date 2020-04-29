<?php
    require_once "../conexion.php";
    $conexion = conexion();
?>

<div class="row mt-4">
    <div class="col-sm-12">
        <div class="table-responsive-xl">
            <table class="table table-sm table-hover table-condensed table-bordered table-striped mt-3">
                <thead>
                    <tr>
                        <td scope="col" class="text-center align-middle background-table">Usuario</td>
                        <td scope="col" class="text-center align-middle background-table">Modificiación</td>
                        <td scope="col" class="text-center align-middle background-table">Producto</td>
                        <td scope="col" class="text-center align-middle background-table">Nota</td>
                        <td scope="col" class="text-center align-middle background-table" style="min-width: 170px; width: 170px">Fecha/Hora</td>
                    </tr>
                </thead>

                <?php
                $sql = "SELECT id_adminRegistros, usuario, modificacion, producto, nota, DATE_FORMAT(fecha, '%d/%m/%Y ' ' %h:%m:%s') FROM adminRegistros";
                $resultado = mysqli_query($conexion, $sql);

                while ($buscar = mysqli_fetch_row($resultado)) {
                    $datos = $buscar[0] . "||" .
                        $buscar[1] . "||" .
                        $buscar[2] . "||" .
                        $buscar[3] . "||" .
                        $buscar[4] . "||" .
                        $buscar[5];
                ?>

                    <tr>
                        <td class="align-middle"><?php echo $buscar[1] ?></td>
                        <td class="align-middle"><?php echo $buscar[2] ?></td>
                        <td class="align-middle"><?php echo $buscar[3] ?></td>
                        <td class="align-middle"><?php echo $buscar[4] ?></td>
                        <td class="align-middle"><?php echo $buscar[5] ?></td>
                    </tr>

                <?php
                    }
                ?>
            </table>
        </div>
    </div>
</div>