<!-- CONTADOR DE ELEMENTOS -->
<?php
    require_once "../conexion.php";
    $conexion = conexion();

    ini_set('date.timezone', 'America/Mexico_City');
    $count_todos_elemetos = $conexion->query("SELECT * FROM productos");
    $count_todos_elemetos_agotar = $conexion->query("SELECT * FROM productos WHERE stock < 3");
    $count_todos_usuarios = $conexion->query("SELECT * FROM usuarios");
?>

<div class="row mt-4">
    <div class="col-12 col-lg-4">
        <div class="m-3">
            <div class="row bg-info rounded-top card-top text-white">
                <div class="col-2 p-4">
                    <i class="fas fa-server icon"></i>
                </div>
                <div class="col-10 text-right p-4">
                    <h1><?php echo $count_todos_elemetos->num_rows; ?></h1>
                    <small>Todos los elementos</small>
                </div>
            </div>
            <a href="productos.php">
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

    <div class="col-12 col-lg-4">
        <div class="m-3">
            <div class="row bg-warning rounded-top card-top text-white">
                <div class="col-2 p-4">
                    <i class="fas fa-exclamation-triangle icon"></i>
                </div>
                <div class="col-10 text-right p-4">
                    <h1><?php echo $count_todos_elemetos_agotar->num_rows; ?></h1>
                    <small>Elementos a punto de agotar</small>
                </div>
            </div>

            <a href="productosAgotar.php">
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

    <div class="col-12 col-lg-4">
        <div class="m-3">
            <div class="row bg-danger rounded-top card-top text-white">
                <div class="col-2 p-4">
                    <i class="fas fa-exclamation-circle icon"></i>
                </div>
                <div class="col-10 text-right p-4">
                    <h1>0</h1>
                    <small>Elementos eliminados recientemente</small>
                </div>
            </div>

            <div class="row rounded-bottom card-bottom border border-danger text-danger">
                <div class="col-10 mt-3 pl-4">
                    <p>Ver detalles</p>
                </div>
                <div class="col-2 mt-3 text-right pr-4">
                    <i class="far fa-arrow-alt-circle-right"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 col-lg-4">
        <div class="m-3">
            <div class="row bg-success rounded-top card-top text-white">
                <div class="col-2 p-4">
                    <i class="fas fa-users icon"></i>
                </div>
                <div class="col-10 text-right p-4">
                    <h1><?php echo $count_todos_usuarios->num_rows; ?></h1>
                    <small>Usuarios registrados</small>
                </div>
            </div>

            <a href="adminUsuarios.php">
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

    <div class="col-12 col-lg-4">
        <div class="m-3">
            <div class="row bg-dark rounded-top card-top text-white">
                <div class="col-2 p-4">
                    <i class="far fa-edit icon"></i>
                </div>
                <div class="col-10 text-right p-4">
                    <h1>0</h1>
                    <small>Modificaciones hoy, <?php echo date("d-m-Y"); ?></small>
                </div>
            </div>

            <div class="row rounded-bottom card-bottom border border-dark text-dark">
                <div class="col-10 mt-3 pl-4">
                    <p>Ver detalles</p>
                </div>
                <div class="col-2 mt-3 text-right pr-4">
                    <i class="far fa-arrow-alt-circle-right"></i>
                </div>
            </div>
        </div>
    </div>
</div>