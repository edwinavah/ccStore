<!-- CONTADOR DE ELEMENTOS -->
<?php
    require_once "../conexion.php";
    $conexion = conexion();

    ini_set('date.timezone', 'America/Chihuahua');
    $iniciaDia = date("Y-m-d 00:00:01");
    $hoy = date("Y-m-d H:i:s");
    $hoy_2 = date("Y-m-d");

    $count_elementos = $conexion->query("SELECT * FROM productos");
    $count_elementos_agotar = $conexion->query("SELECT * FROM productos WHERE stock < 3");
    $count_todos_usuarios = $conexion->query("SELECT * FROM usuarios");
    $count_modificado = $conexion->query("SELECT * FROM adminRegistros WHERE accion = 'Modificado' AND fecha BETWEEN '$iniciaDia' AND '$hoy'");
    $count_eliminado = $conexion->query("SELECT * FROM adminRegistros WHERE accion = 'Eliminado' AND fecha BETWEEN '$iniciaDia' AND '$hoy'");
    $count_salida = $conexion->query("SELECT * FROM salida WHERE fechaRegistro BETWEEN '$iniciaDia' AND '$hoy'");
    $count_DHL = $conexion->query("SELECT * FROM guias_dhl WHERE fechaRegistro = '$hoy_2'");
    $count_FedEx = $conexion->query("SELECT * FROM guias_fedEx WHERE fechaRegistro = '$hoy_2'");
    $count_Estafeta = $conexion->query("SELECT * FROM guias_estafeta WHERE fechaRegistro = '$hoy_2'");
?>

<div class="row mt-4">
    <div class="col-12 col-xl-4">
        <div class="m-3">
            <div class="row bg-success rounded-top card-top text-white">
                <div class="col-2 p-4">
                    <i class="fas fa-server icon"></i>
                </div>
                <div class="col-10 text-right p-4">
                    <h1><?php echo $count_elementos->num_rows; ?></h1>
                    <small>Todos los productos</small>
                </div>
            </div>
            <a href="productos.php">
                <div class="row rounded-bottom card-bottom border border-success text-success">
                    <div class="col-10 mt-3 pl-4">
                        <p>Ver detalles</p>
                    </div>
                    <div class="col-2 mt-3 text-right pr-4">
                        <i class="far fa-arrow-alt-circle-right"></i>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="col-12 col-xl-4">
        <div class="m-3">
            <div class="row bg-danger rounded-top card-top text-white">
                <div class="col-2 p-4">
                    <i class="fas fa-exclamation-circle icon"></i>
                </div>
                <div class="col-10 text-right p-4">
                    <h1><?php echo $count_eliminado->num_rows; ?></h1>
                    <small>Eliminados hoy, <?php echo date("d-m-Y H:i:s"); ?></small>
                </div>
            </div>

            <a href="administracion.php">
                <div class="row rounded-bottom card-bottom border border-danger text-danger">
                    <div class="col-10 mt-3 pl-4">
                        <p>Ver detalles</p>
                    </div>
                    <div class="col-2 mt-3 text-right pr-4">
                        <i class="far fa-arrow-alt-circle-right"></i>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="col-12 col-xl-4">
        <div class="m-3">
            <div class="row bg-warning rounded-top card-top text-dark">
                <div class="col-2 p-4">
                    <i class="far fa-edit icon"></i>
                </div>
                <div class="col-10 text-right p-4">
                    <h1><?php echo $count_modificado->num_rows; ?></h1>
                    <small>Modificaciones hoy, <?php echo date("d-m-Y H:i:s"); ?></small>
                </div>
            </div>

            <a href="administracion.php">
                <div class="row rounded-bottom card-bottom border border-warning text-dark">
                    <div class="col-10 mt-3 pl-4">
                        <p>Ver detalles</p>
                    </div>
                    <div class="col-2 mt-3 text-right pr-4">
                        <i class="far fa-arrow-alt-circle-right"></i>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="col-12 col-xl-4">
        <div class="m-3">
            <div class="row bg-primary rounded-top card-top text-white">
                <div class="col-2 p-4">
                    <i class="fas fa-shopping-cart icon"></i>
                </div>
                <div class="col-10 text-right p-4">
                    <h1><?php echo $count_salida->num_rows; ?></h1>
                    <small>Salidas de hoy, <?php echo date("d-m-Y H:i:s"); ?></small>
                </div>
            </div>

            <a href="salidaProductos.php">
                <div class="row rounded-bottom card-bottom border border-primary text-primary">
                    <div class="col-10 mt-3 pl-4">
                        <p>Ver detalles</p>
                    </div>
                    <div class="col-2 mt-3 text-right pr-4">
                        <i class="far fa-arrow-alt-circle-right"></i>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="col-12 col-xl-4">
        <div class="m-3">
            <div class="row bg-dark rounded-top card-top text-white">
                <div class="col-2 p-4">
                    <i class="fas fa-exclamation-triangle icon"></i>
                </div>
                <div class="col-10 text-right p-4">
                    <h1><?php echo $count_elementos_agotar->num_rows; ?></h1>
                    <small>Elementos a punto de agotar</small>
                </div>
            </div>

            <a href="productosAgotar.php">
                <div class="row rounded-bottom card-bottom border border-dark text-dark">
                    <div class="col-10 mt-3 pl-4">
                        <p>Ver detalles</p>
                    </div>
                    <div class="col-2 mt-3 text-right pr-4">
                        <i class="far fa-arrow-alt-circle-right"></i>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="col-12 col-xl-4">
        <div class="m-3">
            <div class="row bg-info rounded-top card-top text-white">
                <div class="col-2 p-4">
                    <i class="fas fa-users icon"></i>
                </div>
                <div class="col-10 text-right p-4">
                    <h1><?php echo $count_todos_usuarios->num_rows; ?></h1>
                    <small>Usuarios registrados</small>
                </div>
            </div>

            <a href="adminUsuarios.php">
                <div class="row rounded-bottom card-bottom border border-info text-info">
                    <div class="col-10 mt-3 pl-4">
                        <p>Ver detalles</p>
                    </div>
                    <div class="col-2 mt-3 text-right pr-4">
                        <i class="far fa-arrow-alt-circle-right"></i>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="col-12 col-xl-4">
        <div class="m-3">
            <div class="row bg-warning rounded-top card-top text-white">
                <div class="col-2 p-4">
                    <img src="assets/images/DHL.png" alt="" style="width: 170px; height: auto;">
                </div>
                <div class="col-10 text-right p-4">
                    <h1><?php echo $count_DHL->num_rows; ?></h1>
                    <small>Etiquetas DHL de hoy, <?php echo date("d-m-Y H:i:s"); ?></small>
                </div>
            </div>

            <a href="guias.php">
                <div class="row rounded-bottom card-bottom border border-warning text-warning">
                    <div class="col-10 mt-3 pl-4">
                        <p>Ver detalles</p>
                    </div>
                    <div class="col-2 mt-3 text-right pr-4">
                        <i class="far fa-arrow-alt-circle-right"></i>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="col-12 col-xl-4">
        <div class="m-3">
            <div class="row bg-ligh rounded-top card-top border-top border-left border-right border-dark text-dark">
                <div class="col-2 p-4">
                    <img src="assets/images/FedEx.png" alt="" style="width: 170px; height: auto;">
                </div>
                <div class="col-10 text-right p-4">
                    <h1><?php echo $count_FedEx->num_rows; ?></h1>
                    <small>Etiquetas FedEx de hoy, <?php echo date("d-m-Y H:i:s"); ?></small>
                </div>
            </div>

            <a href="guias.php">
                <div class="row rounded-bottom card-bottom border border-dark text-dark">
                    <div class="col-10 mt-3 pl-4">
                        <p>Ver detalles</p>
                    </div>
                    <div class="col-2 mt-3 text-right pr-4">
                        <i class="far fa-arrow-alt-circle-right"></i>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="col-12 col-xl-4">
        <div class="m-3">
            <div class="row bg-ligh rounded-top card-top border-top border-left border-right border-danger text-danger">
                <div class="col-2 p-4">
                    <img src="assets/images/Estafeta.png" alt="" style="width: 170px; height: auto;">
                </div>
                <div class="col-10 text-right p-4">
                    <h1><?php echo $count_Estafeta->num_rows; ?></h1>
                    <small>Etiquetas Estafeta de hoy, <?php echo date("d-m-Y H:i:s"); ?></small>
                </div>
            </div>

            <a href="guias.php">
                <div class="row rounded-bottom card-bottom border border-danger text-danger">
                    <div class="col-10 mt-3 pl-4">
                        <p>Ver detalles</p>
                    </div>
                    <div class="col-2 mt-3 text-right pr-4">
                        <i class="far fa-arrow-alt-circle-right"></i>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>