<?php
    require_once "../conexion.php";
    $conexion = conexion();
    session_start();
?>

<!-- TABLA SALIDA DE PRODUCTOS -->
<div class="row mt-4">
    <div class="col-sm-12">
        <div class="table-responsive-xl" style="font-size: 15px;">
            <table class="table table-sm table-hover table-condensed table-bordered table-striped mt-3">
                <thead>
                    <tr>
                        <td scope="col" class="text-center align-middle background-table d-none">ID Salida</td>
                        <td scope="col" class="text-center align-middle background-table d-none">ID Producto</td>
                        <td scope="col" class="text-center align-middle background-table">Código</td>
                        <td scope="col" class="text-center align-middle background-table">Marca</td>
                        <td scope="col" class="text-center align-middle background-table">Modelo</td>
                        <td scope="col" class="text-center align-middle background-table d-none">Stock producto</td>
                        <td scope="col" class="text-center align-middle background-table">Cantidad</td>
                        <td scope="col" class="text-center align-middle background-table">Fecha - Hora</td>
                        <td scope="col" class="text-center align-middle background-table">Usuario</td>
                        <?php if($_SESSION['tipo'] != "Administrador"){ ?>
                            <td scope="col" class="text-center align-middle background-table">Accion</td>
                        <?php } else { ?>
                            <td scope="col" class="text-center align-middle background-table">Accion</td>
                        <?php } ?>
                    </tr>
                </thead>

                <?php
                $sql = "SELECT id_salida, productos.id_productos, productos.codigo_barras, productos.marca, productos.modelo, productos.stock, stock_salida, DATE_FORMAT(fechaRegistro, '%d/%m/%Y ' ' %h:%i:%s'), usuario 
                FROM salida INNER JOIN productos ON salida.id_productos = productos.id_productos ORDER BY fechaRegistro DESC LIMIT 16";
                $resultado = mysqli_query($conexion, $sql);

                while ($buscar = mysqli_fetch_row($resultado)) {
                    $datos = $buscar[0] . "||" .
                        $buscar[1] . "||" .
                        $buscar[2] . "||" .
                        $buscar[3] . "||" .
                        $buscar[4] . "||" .
                        $buscar[5] . "||" .
                        $buscar[6] . "||" .
                        $buscar[7] . "||" .
                        $buscar[8];
                ?>

                    <tr>
                        <td class="align-middle d-none"><?php echo $buscar[0] ?></td>
                        <td class="align-middle d-none"><?php echo $buscar[1] ?></td>
                        <td class="align-middle"><?php echo $buscar[2] ?></td>
                        <td class="align-middle"><?php echo $buscar[3] ?></td>
                        <td class="align-middle"><?php echo $buscar[4] ?></td>
                        <td class="align-middle d-none"><?php echo $buscar[5] ?></td>
                        <td class="align-middle"><?php echo $buscar[6] ?></td>
                        <td class="align-middle"><?php echo $buscar[7] ?></td>
                        <td class="align-middle"><?php echo $buscar[8] ?></td>
                        <?php if($_SESSION['tipo'] != "Administrador"){ ?>
                            <td class="text-center align-middle" style="min-width: 125px; width: 125px">
                                <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#cancelar" onclick="agregaform1('<?php echo $datos ?>')" disabled><i class="fas fa-trash-alt"></i></button>
                            </td>
                        <?php } else { ?>
                            <td class="text-center align-middle" style="min-width: 125px; width: 125px">
                                <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#cancelar" onclick="agregaform1('<?php echo $datos ?>')"><i class="fas fa-trash-alt"></i></button>
                            </td>
                        <?php } ?>
                    </tr>

                <?php
                    }
                    $conexion->close();
                ?>
            </table>
        </div>
    </div>
</div>


