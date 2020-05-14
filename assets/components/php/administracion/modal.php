<?php
    require_once "../conexion.php";
    $conexion = conexion();
    session_start();
    $usuario = $_SESSION['user'];
?>

<div class="modal fade" id="productosModificados" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="font-size: 1.5rem;" id="exampleModalLabel">Productos Modificados</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="table-responsive-xl">
                    <table class="table table-sm table-hover table-condensed table-bordered table-striped">
                        <thead>
                            <tr class="text-center bg-warning">
                                <td class="align-middle" scope="col">Usuario</td>
                                <td class="align-middle" scope="col">Acción</td>
                                <td class="align-middle" scope="col">Producto</td>
                                <td class="align-middle" scope="col">Movimiento</td>
                                <td class="align-middle" scope="col">Nota</td>
                                <td class="align-middle" scope="col" style="min-width: 170px; width: 170px">Fecha - Hora</td>
                            </tr>
                        </thead>

                        <?php
                        $sql = "SELECT id_adminRegistros, usuario, accion, producto, movimiento, nota, DATE_FORMAT(fecha, '%d/%m/%Y ' ' %h:%i:%s') FROM adminRegistros WHERE accion = 'Modificado' ORDER BY fecha DESC";
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
                            </tr>
                        
                        <?php
                            }
                        ?>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-dark" data-dismiss="modal" onclick="location.reload();">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="productosEliminados" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="font-size: 1.5rem;" id="exampleModalLabel">Productos Eliminados</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="table-responsive-xl mt-2">
                    <table class="table table-sm table-hover table-condensed table-bordered table-striped">
                        <thead>
                            <tr class="text-center bg-danger text-white">
                                <td class="align-middle" scope="col">Usuario</td>
                                <td class="align-middle" scope="col">Acción</td>
                                <td class="align-middle" scope="col">Producto</td>
                                <td class="align-middle" scope="col">Movimiento</td>
                                <td class="align-middle" scope="col">Nota</td>
                                <td class="align-middle" scope="col" style="min-width: 170px; width: 170px">Fecha - Hora</td>
                            </tr>
                        </thead>

                        <?php
                        $sql = "SELECT id_adminRegistros, usuario, accion, producto, movimiento, nota, DATE_FORMAT(fecha, '%d/%m/%Y ' ' %h:%i:%s') FROM adminRegistros WHERE accion = 'Eliminado' ORDER BY fecha DESC";
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
                            </tr>
                        
                        <?php
                            }
                        ?>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-dark" data-dismiss="modal" onclick="location.reload();">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="productosAgregados" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="font-size: 1.5rem;" id="exampleModalLabel">Productos Agregados</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="table-responsive-xl mt-2">
                    <table class="table table-sm table-hover table-condensed table-bordered table-striped">
                        <thead>
                            <tr class="text-center bg-success text-white">
                                <td class="align-middle" scope="col">Usuario</td>
                                <td class="align-middle" scope="col">Acción</td>
                                <td class="align-middle" scope="col">Producto</td>
                                <td class="align-middle" scope="col">Movimiento</td>
                                <td class="align-middle" scope="col">Nota</td>
                                <td class="align-middle" scope="col" style="min-width: 170px; width: 170px">Fecha - Hora</td>
                            </tr>
                        </thead>

                        <?php
                        $sql = "SELECT id_adminRegistros, usuario, accion, producto, movimiento, nota, DATE_FORMAT(fecha, '%d/%m/%Y ' ' %h:%i:%s') FROM adminRegistros WHERE accion = 'Agregado' ORDER BY fecha DESC";
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
                            </tr>
                        
                        <?php
                            }
                        ?>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-dark" data-dismiss="modal" onclick="location.reload();">Cerrar</button>
            </div>
        </div>
    </div>
</div>