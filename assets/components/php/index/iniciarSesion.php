<!doctype html>
<html lang="en">
	<head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../../../../assets/libraries/css/all.css">
        <link rel="stylesheet" href="../../../../assets/libraries/css/bootstrap.css">
        <link rel="stylesheet" href="../../../../assets/libraries/css/alertify.css">
        <link rel="stylesheet" href="../../../../assets/libraries/css/themes/default.css">
        <link rel="stylesheet" href="../../../../assets/components/css/estilos.css">

        <script defer src="../../../../assets/libraries/js/all.js"></script>
        <script src="../../../../assets/libraries/js/jquery-3.4.1.min.js"></script>
        <script src="../../../../assets/libraries/js/bootstrap.min.js"></script>
        <script src="../../../../assets/libraries/js/alertify.js"></script>
        

        <!-- FAVICON Y TITULO EN EL NAVEGADOR  -->
        <link rel="shortcut icon" href="assets/images/favicon.svg">
        <title>ccStore | Iniciar Sesion</title>
    </head>

	<body>
        <div class="container">
            <?php
                // error_reporting(0);
                session_start();

                require_once "../conexion.php";
                $conexion = conexion();

                $usuario = $_POST['usuario']; 
                $contrasena = $_POST['contrasena'];
                
                $sql = "SELECT nombre, usuario, contrasena FROM usuarios WHERE usuario = '$usuario'";
                $resultado = mysqli_query($conexion, $sql);
                
                $row = mysqli_fetch_assoc($resultado);

                $hash = $row['contrasena'];

                if (password_verify($_POST['contrasena'], $hash)) {
                            
                    $_SESSION['loggedin'] = true;
                    $_SESSION['name'] = $row['nombre'];
                    $_SESSION['start'] = time();
                    $_SESSION['expire'] = $_SESSION['start'] + (1 * 3600);						
                    
                    header("Location: ../../../../panel.php");
                
                } else {
                    echo 
                    '<div class="row">
                        <div class="col-12 text-center mt-5">
                            <img src="../../../images/ccStore_Azul.svg" alt="" style="width: 400px; height: auto;">
                            <h1 class="mt-2"><strong>Upps!</strong></h1>
                        </div>
                        <div class="col-12 text-center">
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>¡Nombre de usuario y/o contraseña incorrecta!</strong> <a href="../../../../index.php">Haga clic aquí para intentar de nuevo.</a><br>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </div>';			
                }
            ?>
        </div>
	</body>
</html>
