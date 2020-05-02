<?php
    require_once "conexion.php";
    $conexion = conexion();
    session_start();
    $usuario = $_SESSION['user'];
    $img = $_SESSION['profile'];
?>

<div class="barra-lateral col-12 col-md-auto">
    <div class="logo text-center">
        <img src="assets/components/php/adminUsuarios/<?php echo $img ?>" alt="" style="width: 140px; height: 140px; border: 5px solid #ffffff; border-radius: 50%;">
        <div class="row">
            <div class="col text-center mt-2">
                Hola, <?php echo $usuario ?>
            </div>
            
        </div>
        <!-- <img src="assets/images/ccStore_Blanco.svg" alt=""> -->
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
                <span> Productos por agotar </span>
            </div>
        </a>

        <a href="guias.php">
            <div class="row">
                <div class="col-3">
                    <i class="fas fa-shipping-fast"></i>
                </div>
                <span>  Número de guías</span>
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
                    <i class="fas fa-key"></i>
                </div>
                <span>Cambiar contraseña</span>
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