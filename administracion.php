<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="assets/libraries/css/all.css">
        <link rel="stylesheet" href="assets/libraries/css/bootstrap.css">
        <link rel="stylesheet" href="assets/libraries/css/alertify.css">
        <link rel="stylesheet" href="assets/libraries/css/themes/default.css">
        <link rel="stylesheet" href="assets/components/css/estilos.css">

        <script defer src="assets/libraries/js/all.js"></script>
        <script src="assets/libraries/js/jquery-3.4.1.min.js"></script>
        <script src="assets/libraries/js/bootstrap.min.js"></script>
        <script src="assets/libraries/js/alertify.js"></script>

        <!-- FAVICON Y TITULO EN EL NAVEGADOR  -->
        <link rel="shortcut icon" href="assets/images/favicon.svg">
        <title>ccStore | Administración</title>
    </head>
    
    <body>
        <?php
            require_once "assets/components/php/conexion.php";
            $conexion = conexion();

            // INICION INICIADA
            session_start(); 
            if (isset($_SESSION['loggedin'])) {  
                //INICIO SESION 
            }
            else {
                //NO INICIO SESION
                header("Location: index.php");
                exit;
            }
            // SESION FINALIZADA POR INACTIVIDAD
            $now = time();          
                if ($now > $_SESSION['expire']) {
                    session_destroy();
                    echo 
                    '<div class="text-center mt-5">
                        <img src="assets/images/ccStore_Azul.svg" alt="" style="width: 300px; height: auto;">
                        <h2 class="mt-2"><strong>Upps!</strong></h2>
                        <p>Por inactividad y seguridad de los datos tu sesión a finalizado. <a href="index.php">Haga clic aquí para iniciar sesión</a></p>
                    </div>';
                    exit;
            }
        ?>
        <!-- ADMINISTRACION -->
        <main>
            <!-- AGREGANDO NAVBAR IZQUIERDA -->
            <div class="container-fluid">
                <div class="row">
                    <div id="navbar">
                        <!-- CONTENIDO NAVBAR -->
                    </div>
                    
                    <!-- CONTENIDO DE ADMINISTRACION -->
                    <main class="main col">
                       <div class="container-fluid">
                            <div class="row">
                                <div class="col-12">
                                    <!-- AGREGANDO TABLAS -->
                                    <div id="administracion"></div>
                                    <!-- AGREGANDO EL MODAL -->
                                    <div id="modal"></div>
                    
                                    <?php
                                        if($_SESSION['tipo'] != "Administrador"){
                                            // SESION INICIADA COMO USUARIO
                                        } else {
                                    ?>
                                    <!-- AGREGANDO CAMPOS PARA GENERAR REPORTE SI ES ADMINISTRADOR -->
                                    <hr>
                                    <div id="generarReporte"></div>
                                    <?php
                                        }
                                    ?>
                                </div>
                            </div>

                            <!-- AGREGANDO FOOTER -->
                            <footer class="container-fluid my-2 mt-4 border-top">
                                <div class="row mt-2 text-center">
                                    <div class="col-12">
                                        <small class="d-block text-muted mt-3">© Copyright 2020 ccStore & G-Tech Software - Todos los derechos reservados.</small>
                                    </div>
                                </div>
                            </footer>
                        </div>
                    </main>
                </div>
            </div>
        </main>
    </body>
</html>

<!-- CODIGO JAVASCRIPT PARA CONTENIDO DE PHP -->
<script type="text/javascript">
    $(document).ready(function(){
        $('#navbar').load('assets/components/php/navbar.php');
        $('#modal').load('assets/components/php/administracion/modal.php');
        $('#generarReporte').load('assets/components/php/administracion/generarReporte.php');

        $(document).ready(function(){
            setInterval(
                function(){
                    $('#administracion').load('assets/components/php/administracion/administracion.php');
                }, 500
            );
        });
    });
</script>