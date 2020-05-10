<?php
    require_once "../conexion.php";
    $conexion = conexion();
    //include('modalCancelar.php');
?>

<!-- TABLA SALIDA DE PRODUCTOS -->
<div class="row mt-4">
    <div class="col-sm-12">
        <div class="table-responsive-xl" style="font-size: 15px;">
            <table class="table table-sm table-hover table-condensed table-bordered table-striped mt-3">
                <thead>
                    <tr>
                        <td scope="col" class="text-center align-middle background-table">Código</td>
                        <td scope="col" class="text-center align-middle background-table">Marca</td>
                        <td scope="col" class="text-center align-middle background-table">Modelo</td>
                        <td scope="col" class="text-center align-middle background-table">Cantidad</td>
                        <td scope="col" class="text-center align-middle background-table">Fecha - Hora</td>
                        <td scope="col" class="text-center align-middle background-table">Usuario</td>
                        <td scope="col" class="text-center align-middle background-table">Accion</td>
                    </tr>
                </thead>

                <?php
                $sql = "SELECT id_productos, codigo_barras, marca, modelo, stock, DATE_FORMAT(fechaRegistro, '%d/%m/%Y ' ' %h:%i:%s'), usuario FROM salida ORDER BY fechaRegistro DESC LIMIT 15";
                $resultado = mysqli_query($conexion, $sql);

                while ($buscar = mysqli_fetch_row($resultado)) {
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
                        <td class="text-center align-middle" style="min-width: 125px; width: 125px">
                        <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#cancelar" onclick="agregaform1(\''.$datos.'\')"><i class="far fa-edit"></i> + </button>
                        </td>
                    </tr>

                <?php
                    }
                    $conexion->close();
                ?>
            </table>
        </div>
    </div>
</div>


