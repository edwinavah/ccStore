<?php
    require_once "../conexion.php";
    $conexion = conexion();
    session_start();
    $usuario = $_SESSION['user'];

    ini_set('date.timezone', 'America/Chihuahua');
    $hoy = date("Y-m-d");
?>

<style>
    .info{
        background: #ffffff;
        box-shadow: 0px 0px 3px #848484;
        padding: 10px;
        font-size: 14px;
    }
</style>

<!-- TABLA DE PAQUETERIAS -->
<div class="row">
    <!-- TABLA PAQUETERIA DHL -->
    <div class="col-sm-12 col-xl-4 mt-3">
        <div class="info rounded">
            <!-- LOGO Y BOTON PARA AGREGAR GUIAS -->
            <div class="d-flex mt-2 mb-2">
                <div class="mr-auto">
                    <img src="assets/images/DHL.png" alt="" style="width: 170px; height: auto;">
                </div>
                <div>
                    <button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#btnDHL">Escanear guías aquí</button>
                </div>
            </div>
            <div class="table-responsive-xl mt-2">
                <table class="table table-sm table-hover table-condensed table-bordered table-striped">
                    <thead>
                        <tr class="text-center bg-warning">
                            <td class="align-middle d-none" scope="col">ID</td>
                            <td class="align-middle" scope="col">Guía</td>
                            <td class="align-middle" scope="col">Fecha</td>
                            <td class="align-middle" scope="col">Usuario</td>
                        </tr>
                    </thead>

                    <?php
                    $sql = "SELECT id_guias_dhl, guia, DATE_FORMAT(fechaRegistro, '%d/%m/%Y'), usuario
                    FROM guias_dhl WHERE fechaRegistro = '$hoy' ORDER BY fechaRegistro DESC";
                    $resultado = mysqli_query($conexion, $sql);

                    while ($buscar = mysqli_fetch_row($resultado)) {
                        $datos = $buscar[0] . "||" .
                            $buscar[1] . "||" .
                            $buscar[2] . "||" .
                            $buscar[3];
                    ?>
                    
                        <tr>
                            <td class="align-middle d-none"><?php echo $buscar[0] ?></td>
                            <td class="align-middle"><?php echo $buscar[1] ?></td>
                            <td class="align-middle"><?php echo $buscar[2] ?></td>
                            <td class="align-middle"><?php echo $buscar[3] ?></td>
                        </tr>
                    
                    <?php
                        }
                    ?>
                </table>
            </div>
        </div>
    </div>

    <!-- TABLA PAQUETERIA FEDEX -->
    <div class="col-sm-12 col-xl-4 mt-3">
        <div class="info rounded">
            <!-- LOGO Y BOTON PARA AGREGAR GUIAS -->
            <div class="d-flex mt-2 mb-2">
                <div class="mr-auto">
                    <img src="assets/images/FedEx.png" alt="" style="width: 170px; height: auto;">
                </div>
                <div>
                    <button type="button" class="btn btn-sm btn-dark" data-toggle="modal" data-target="#btnFedEx">Escanear guías aquí</button>
                </div>
            </div>
            <div class="table-responsive-xl mt-2">
                <table class="table table-sm table-hover table-condensed table-bordered table-striped">
                    <thead>
                        <tr class="text-center bg-dark text-white">
                            <td class="align-middle d-none" scope="col">ID</td>
                            <td class="align-middle" scope="col">Guía</td>
                            <td class="align-middle" scope="col">Fecha</td>
                            <td class="align-middle" scope="col">Usuario</td>
                        </tr>
                    </thead>

                    <?php
                    $sql = "SELECT id_guias_fedex, guia, DATE_FORMAT(fechaRegistro, '%d/%m/%Y'), usuario
                    FROM guias_fedex WHERE fechaRegistro = '$hoy' ORDER BY fechaRegistro DESC";
                    $resultado = mysqli_query($conexion, $sql);

                    while ($buscar = mysqli_fetch_row($resultado)) {
                        $datos = $buscar[0] . "||" .
                            $buscar[1] . "||" .
                            $buscar[2] . "||" .
                            $buscar[3];
                    ?>
                    
                        <tr>
                            <td class="align-middle d-none"><?php echo $buscar[0] ?></td>
                            <td class="align-middle"><?php echo $buscar[1] ?></td>
                            <td class="align-middle"><?php echo $buscar[2] ?></td>
                            <td class="align-middle"><?php echo $buscar[3] ?></td>
                        </tr>
                    
                    <?php
                        }
                    ?>
                </table>
            </div>
        </div>
    </div>

    <!-- TABLA PAQUETERIA ESTAFETA -->
    <div class="col-sm-12 col-xl-4 mt-3">
        <div class="info rounded">
            <!-- LOGO Y BOTON PARA AGREGAR GUIAS -->
            <div class="d-flex mt-2 mb-2">
                <div class="mr-auto">
                    <img src="assets/images/Estafeta.png" alt="" style="width: 170px; height: auto;">
                </div>
                <div>
                    <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#btnEstafeta">Escanear guías aquí</button>
                </div>
            </div>
            <div class="table-responsive-xl mt-2">
                <table class="table table-sm table-hover table-condensed table-bordered table-striped">
                    <thead>
                        <tr class="text-center bg-danger text-white">
                            <td class="align-middle d-none" scope="col">ID</td>
                            <td class="align-middle" scope="col">Guía</td>
                            <td class="align-middle" scope="col">Fecha</td>
                            <td class="align-middle" scope="col">Usuario</td>
                        </tr>
                    </thead>

                    <?php
                    $sql = "SELECT id_guias_estafeta, guia, DATE_FORMAT(fechaRegistro, '%d/%m/%Y'), usuario
                    FROM guias_estafeta WHERE fechaRegistro = '$hoy' ORDER BY fechaRegistro DESC";
                    $resultado = mysqli_query($conexion, $sql);

                    while ($buscar = mysqli_fetch_row($resultado)) {
                        $datos = $buscar[0] . "||" .
                            $buscar[1] . "||" .
                            $buscar[2] . "||" .
                            $buscar[3];
                    ?>
                    
                        <tr>
                            <td class="align-middle d-none"><?php echo $buscar[0] ?></td>
                            <td class="align-middle"><?php echo $buscar[1] ?></td>
                            <td class="align-middle"><?php echo $buscar[2] ?></td>
                            <td class="align-middle"><?php echo $buscar[3] ?></td>
                        </tr>
                    
                    <?php
                        }
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>
