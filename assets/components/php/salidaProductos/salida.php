<?php
    require_once "../conexion.php";
    $conexion = conexion();
?>

<!-- TABLA SALIDA DE PRODUCTOS -->
<div class="row mt-4">
    <div class="col-sm-12">
        <div class="table-responsive-xl">
            <table class="table table-sm table-hover table-condensed table-bordered table-striped mt-3">
                <thead>
                    <tr>
                        <td scope="col" class="text-center align-middle background-table">Código</td>
                        <td scope="col" class="text-center align-middle background-table">Marca</td>
                        <td scope="col" class="text-center align-middle background-table">Modelo</td>
                        <td scope="col" class="text-center align-middle background-table">Cantidad</td>
                        <td scope="col" class="text-center align-middle background-table">Fecha</td>
                        <td scope="col" class="text-center align-middle background-table">Usuario</td>
                    </tr>
                </thead>

                <?php
                $sql2 = "SELECT id_productos, codigo_barras, marca, modelo, stock, DATE_FORMAT(fechaRegistro, '%d/%m/%Y ' ' %h:%i:%s'), usuario FROM salida ORDER BY fechaRegistro DESC LIMIT 15";
                $resultado2 = mysqli_query($conexion, $sql2);

                while ($buscar = mysqli_fetch_row($resultado2)) {
                    $datos = $buscar[0] . "||" .
                        $buscar[1] . "||" .
                        $buscar[2] . "||" .
                        $buscar[3] . "||" .
                        $buscar[4] . "||" .
                        $buscar[5] . "||" .
                        $buscar[6];
                ?>

                    <tr>
                        <td class="align-middle"><?php echo $buscar[1] ?></td>
                        <td class="align-middle"><?php echo $buscar[2] ?></td>
                        <td class="align-middle"><?php echo $buscar[3] ?></td>
                        <td class="align-middle"><?php echo $buscar[4] ?></td>
                        <td class="align-middle"><?php echo $buscar[5] ?></td>
                        <td class="align-middle"><?php echo $buscar[6] ?></td>
                    </tr>

                <?php
                    }
                    $conexion->close();
                ?>
            </table>
        </div>
    </div>
</div>


