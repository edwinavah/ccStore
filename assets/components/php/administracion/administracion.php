<?php
    require_once "../conexion.php";
    $conexion = conexion();
    session_start();
    include("modal.php");
    $usuario = $_SESSION['user'];
?>

<style>
    .info{
        background: #ffffff;
        box-shadow: 0px 0px 3px #848484;
        padding: 10px;
    }
</style>

<?php
    if($_SESSION['tipo'] != "Administrador"){
        $count_modificado_user = $conexion->query("SELECT * FROM adminRegistros WHERE accion = 'Modificado' AND usuario = '$usuario'");
        $count_eliminado_user = $conexion->query("SELECT * FROM adminRegistros WHERE accion = 'Eliminado' AND usuario = '$usuario'");
        $count_agregado_user = $conexion->query("SELECT * FROM adminRegistros WHERE accion = 'Agregado' AND usuario = '$usuario'");
?>

<div class="row">
    <!-- TABLA DE REGISTROS DE PRODUCTOS MODIFICADOS -->
    <div class="col-sm-12 col-lg-6 mt-3">
        <div class="info rounded">
            <button type="button" class="btn btn-warning mt-1" data-toggle="modal" data-target="#productosModificados">
                Ver todos los productos modificados <span class="badge badge-light"><?php echo $count_modificado_user->num_rows; ?></span>
            </button>
            <div class="table-responsive-xl mt-2">
                <table class="table table-sm table-hover table-condensed table-bordered table-striped">
                    <thead>
                        <tr class="text-center bg-warning">
                            <td class="align-middle" scope="col">Usuario</td>
                            <td class="align-middle" scope="col">Acción</td>
                            <td class="align-middle" scope="col">Producto</td>
                            <td class="align-middle" scope="col" style="min-width: 170px; width: 170px">Fecha - Hora</td>
                        </tr>
                    </thead>

                    <?php
                    $sql = "SELECT id_adminRegistros, usuario, accion, producto, DATE_FORMAT(fecha, '%d/%m/%Y ' ' %h:%i:%s') 
                    FROM adminRegistros WHERE accion = 'Modificado' AND usuario = '$usuario' ORDER BY fecha DESC LIMIT 10";
                    $resultado = mysqli_query($conexion, $sql);

                    while ($buscar = mysqli_fetch_row($resultado)) {
                        $datos = $buscar[0] . "||" .
                            $buscar[1] . "||" .
                            $buscar[2] . "||" .
                            $buscar[3] . "||" .
                            $buscar[4];
                    ?>
                    
                        <tr>
                            <td class="align-middle"><?php echo $buscar[1] ?></td>
                            <td class="align-middle"><?php echo $buscar[2] ?></td>
                            <td class="align-middle"><?php echo $buscar[3] ?></td>
                            <td class="align-middle"><?php echo $buscar[4] ?></td>
                        </tr>
                    
                    <?php
                        }
                    ?>
                </table>
            </div>
        </div>
    </div>
    <!-- TABLA DE REGISTROS DE PRODUCTOS AGREGADOS -->
    <div class="col-sm-12 col-lg-6 mt-3">
        <div class="info rounded">
            <button type="button" class="btn btn-danger mt-1" data-toggle="modal" data-target="#productosEliminados">
                Ver todos los productos eliminados <span class="badge badge-light"><?php echo $count_eliminado_user->num_rows; ?></span>
            </button>
            <div class="table-responsive-xl mt-2">
                <table class="table table-sm table-hover table-condensed table-bordered table-striped">
                    <thead>
                        <tr class="text-center bg-danger text-white">
                            <td class="align-middle" scope="col">Usuario</td>
                            <td class="align-middle" scope="col">Acción</td>
                            <td class="align-middle" scope="col">Producto</td>
                            <td class="align-middle" scope="col" style="min-width: 170px; width: 170px">Fecha - Hora</td>
                        </tr>
                    </thead>

                    <?php
                    $sql = "SELECT id_adminRegistros, usuario, accion, producto, DATE_FORMAT(fecha, '%d/%m/%Y ' ' %h:%i:%s') 
                    FROM adminRegistros WHERE accion = 'Eliminado' AND usuario = '$usuario' ORDER BY fecha DESC LIMIT 10";
                    $resultado = mysqli_query($conexion, $sql);

                    while ($buscar = mysqli_fetch_row($resultado)) {
                        $datos = $buscar[0] . "||" .
                            $buscar[1] . "||" .
                            $buscar[2] . "||" .
                            $buscar[3] . "||" .
                            $buscar[4];
                    ?>
                    
                        <tr>
                            <td class="align-middle"><?php echo $buscar[1] ?></td>
                            <td class="align-middle"><?php echo $buscar[2] ?></td>
                            <td class="align-middle"><?php echo $buscar[3] ?></td>
                            <td class="align-middle"><?php echo $buscar[4] ?></td>
                        </tr>
                    
                    <?php
                        }
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="row mt-3">
    <div class="col-sm-12 col-lg-12">
        <div class="info rounded">
            <button type="button" class="btn btn-success mt-1" data-toggle="modal" data-target="#productosAgregados">
                Ver todos los productos agregados <span class="badge badge-light"><?php echo $count_agregado_user->num_rows; ?></span>
            </button>
                <div class="table-responsive-xl mt-2">
                    <table class="table table-sm table-hover table-condensed table-bordered table-striped">
                        <thead>
                            <tr class="text-center bg-success text-white">
                                <td class="align-middle" scope="col">Usuario</td>
                                <td class="align-middle" scope="col">Acción</td>
                                <td class="align-middle" scope="col">Producto</td>
                                <td class="align-middle" scope="col" style="min-width: 170px; width: 170px">Fecha - Hora</td>
                            </tr>
                        </thead>

                        <?php
                        $sql = "SELECT id_adminRegistros, usuario, accion, producto, DATE_FORMAT(fecha, '%d/%m/%Y ' ' %h:%i:%s') 
                        FROM adminRegistros WHERE accion = 'Agregado' AND usuario = '$usuario' ORDER BY fecha DESC LIMIT 10";
                        $resultado = mysqli_query($conexion, $sql);

                        while ($buscar = mysqli_fetch_row($resultado)) {
                            $datos = $buscar[0] . "||" .
                                $buscar[1] . "||" .
                                $buscar[2] . "||" .
                                $buscar[3] . "||" .
                                $buscar[4];
                        ?>
                        
                            <tr>
                                <td class="align-middle"><?php echo $buscar[1] ?></td>
                                <td class="align-middle"><?php echo $buscar[2] ?></td>
                                <td class="align-middle"><?php echo $buscar[3] ?></td>
                                <td class="align-middle"><?php echo $buscar[4] ?></td>
                            </tr>
                        
                        <?php
                            }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    } else {
        $count_modificado = $conexion->query("SELECT * FROM adminRegistros WHERE accion = 'Modificado'");
        $count_eliminado = $conexion->query("SELECT * FROM adminRegistros WHERE accion = 'Eliminado'");
        $count_agregado = $conexion->query("SELECT * FROM adminRegistros WHERE accion = 'Agregado'");
?>

<div class="row">
    <!-- TABLA DE REGISTROS DE PRODUCTOS MODIFICADOS -->
    <div class="col-sm-12 col-lg-6 mt-3">
        <div class="info rounded">
            <button type="button" class="btn btn-warning mt-1" data-toggle="modal" data-target="#productosModificados">
                Ver todos los productos modificados <span class="badge badge-light"><?php echo $count_modificado->num_rows; ?></span>
            </button>
            <div class="table-responsive-xl mt-2">
                <table class="table table-sm table-hover table-condensed table-bordered table-striped">
                    <thead>
                        <tr class="text-center bg-warning">
                            <td class="align-middle" scope="col">Usuario</td>
                            <td class="align-middle" scope="col">Acción</td>
                            <td class="align-middle" scope="col">Producto</td>
                            <td class="align-middle" scope="col" style="min-width: 170px; width: 170px">Fecha - Hora</td>
                        </tr>
                    </thead>

                    <?php
                    $sql = "SELECT id_adminRegistros, usuario, accion, producto, DATE_FORMAT(fecha, '%d/%m/%Y ' ' %h:%i:%s') 
                    FROM adminRegistros WHERE accion = 'Modificado' ORDER BY fecha DESC LIMIT 10";
                    $resultado = mysqli_query($conexion, $sql);

                    while ($buscar = mysqli_fetch_row($resultado)) {
                        $datos = $buscar[0] . "||" .
                            $buscar[1] . "||" .
                            $buscar[2] . "||" .
                            $buscar[3] . "||" .
                            $buscar[4];
                    ?>
                    
                        <tr>
                            <td class="align-middle"><?php echo $buscar[1] ?></td>
                            <td class="align-middle"><?php echo $buscar[2] ?></td>
                            <td class="align-middle"><?php echo $buscar[3] ?></td>
                            <td class="align-middle"><?php echo $buscar[4] ?></td>
                        </tr>
                    
                    <?php
                        }
                    ?>
                </table>
            </div>
        </div>
    </div>
    <!-- TABLA DE REGISTROS DE PRODUCTOS AGREGADOS -->
    <div class="col-sm-12 col-lg-6 mt-3">
        <div class="info rounded">
            <button type="button" class="btn btn-danger mt-1" data-toggle="modal" data-target="#productosEliminados">
                Ver todos los productos eliminados <span class="badge badge-light"><?php echo $count_eliminado->num_rows; ?></span>
            </button>
            <div class="table-responsive-xl mt-2">
                <table class="table table-sm table-hover table-condensed table-bordered table-striped">
                    <thead>
                        <tr class="text-center bg-danger text-white">
                            <td class="align-middle" scope="col">Usuario</td>
                            <td class="align-middle" scope="col">Acción</td>
                            <td class="align-middle" scope="col">Producto</td>
                            <td class="align-middle" scope="col" style="min-width: 170px; width: 170px">Fecha - Hora</td>
                        </tr>
                    </thead>

                    <?php
                    $sql = "SELECT id_adminRegistros, usuario, accion, producto, DATE_FORMAT(fecha, '%d/%m/%Y ' ' %h:%i:%s') 
                    FROM adminRegistros WHERE accion = 'Eliminado' ORDER BY fecha DESC LIMIT 10";
                    $resultado = mysqli_query($conexion, $sql);

                    while ($buscar = mysqli_fetch_row($resultado)) {
                        $datos = $buscar[0] . "||" .
                            $buscar[1] . "||" .
                            $buscar[2] . "||" .
                            $buscar[3] . "||" .
                            $buscar[4];
                    ?>
                    
                        <tr>
                            <td class="align-middle"><?php echo $buscar[1] ?></td>
                            <td class="align-middle"><?php echo $buscar[2] ?></td>
                            <td class="align-middle"><?php echo $buscar[3] ?></td>
                            <td class="align-middle"><?php echo $buscar[4] ?></td>
                        </tr>
                    
                    <?php
                        }
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="row mt-3">
    <div class="col-sm-12 col-lg-12">
        <div class="info rounded">
            <button type="button" class="btn btn-success mt-1" data-toggle="modal" data-target="#productosAgregados">
                Ver todos los productos agregados <span class="badge badge-light"><?php echo $count_agregado->num_rows; ?></span>
            </button>
                <div class="table-responsive-xl mt-2">
                    <table class="table table-sm table-hover table-condensed table-bordered table-striped">
                        <thead>
                            <tr class="text-center bg-success text-white">
                                <td class="align-middle" scope="col">Usuario</td>
                                <td class="align-middle" scope="col">Acción</td>
                                <td class="align-middle" scope="col">Producto</td>
                                <td class="align-middle" scope="col" style="min-width: 170px; width: 170px">Fecha - Hora</td>
                            </tr>
                        </thead>

                        <?php
                        $sql = "SELECT id_adminRegistros, usuario, accion, producto, DATE_FORMAT(fecha, '%d/%m/%Y ' ' %h:%i:%s') 
                        FROM adminRegistros WHERE accion = 'Agregado' ORDER BY fecha DESC LIMIT 10";
                        $resultado = mysqli_query($conexion, $sql);

                        while ($buscar = mysqli_fetch_row($resultado)) {
                            $datos = $buscar[0] . "||" .
                                $buscar[1] . "||" .
                                $buscar[2] . "||" .
                                $buscar[3] . "||" .
                                $buscar[4];
                        ?>
                        
                            <tr>
                                <td class="align-middle"><?php echo $buscar[1] ?></td>
                                <td class="align-middle"><?php echo $buscar[2] ?></td>
                                <td class="align-middle"><?php echo $buscar[3] ?></td>
                                <td class="align-middle"><?php echo $buscar[4] ?></td>
                            </tr>
                        
                        <?php
                            }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<hr>

<div class="row mt-3">
    <div class="col-12">
        <form action="assets/components/php/administracion/reporte.php" method="POST" target="_blank">
            <div class="form-group">
                <div class="form-row">
                    <div class="col">
                        <div class="input-group pull-left">
                            <span class="input-group-addon mt-2 mr-2" id="basic-addon1">Desde:</span>
                            <input type="date" name="desde" class="form-control" id="desde" required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="input-group pull-left">
                            <span class="input-group-addon mt-2 mr-2" id="basic-addon1">Hasta:</span>
                            <input type="date" name="hasta" class="form-control" id="hasta" required>
                        </div>
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-danger text-white">Exportar PDF <i class="fas fa-file-pdf"></i></button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<?php
    }
?>