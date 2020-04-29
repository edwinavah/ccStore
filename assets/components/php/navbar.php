<?php
    require_once "conexion.php";
    $conexion = conexion();
    session_start();
    $usuario = $_SESSION['user'];
    $img = $_SESSION['profile'];
?>

<div class="barra-lateral col-12 col-md-auto">
    <div class="logo">
        <img src="assets/images/ccStore_Blanco.svg" alt="">
    </div>
    <nav class="menu d-flex d-sm-block justify-content-center flex-wrap">
        <a href="panel.php">
            <div class="row">
                <div class="col-3">
                    <i class="fas fa-tachometer-alt"></i>
                </div>
                <span> Dashboard</span>
            </div>
        </a>

        <a href="productos.php">
            <div class="row">
                <div class="col-3">
                    <i class="fas fa-box-open"></i>
                </div>
                <span> Productos</span>
            </div>
        </a>

        <a href="salidaProductos.php">
            <div class="row">
                <div class="col-3">
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <span> Salida de productos</span>
            </div>
        </a>

        <a href="productosAgotar.php">
            <div class="row">
                <div class="col-3">
                    <i class="fas fa-exclamation-triangle"></i>
                </div>
                <span> Productos por agotar</span>
            </div>
        </a>
        
        <a href="administracion.php">
            <div class="row">
                <div class="col-3">
                    <i class="fas fa-cogs"></i>
                </div>
                <span> Administración</span>
            </div>
        </a>

        <?php
            if($_SESSION['tipo'] != "Administrador"){
                
            } else {
                echo 
                '<a href="adminUsuarios.php">
                    <div class="row">
                        <div class="col-3">
                            <i class="fas fa-users"></i>
                        </div>
                        <span> Administrar usuarios</span>
                    </div>
                </a>';
            }
        ?>

        

        <a href="perfil.php">
            <div class="row">
                <div class="col-3">
                    <img src="assets/components/php/adminUsuarios/<?php echo $img ?>" alt="" style="width: 23px; height: 23px; border-radius: 50%;">
                </div>
                <span>Hola, <?php echo $usuario ?></span>
            </div>
        </a>

        <a href="assets/components/php/index/logout.php">
            <div class="row">
                <div class="col-3">
                    <i class="fas fa-sign-out-alt"></i>
                </div>
                <span> Salir</span>
            </div>
        </a>
    </nav>
</div>