<!DOCTYPE html>
<html>
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
        <script src="../../../../assets/components/js/productos.js"></script>

        <!-- FAVICON Y TITULO EN EL NAVEGADOR  -->
        <link rel="shortcut icon" href="assets/images/favicon.svg">
        <title>ccStore | Crear Usuario</title>
    </head>
    <body>
        <?php
            require_once "../conexion.php";
            $conexion = conexion();

            $checkUsuario = "SELECT * FROM usuarios WHERE usuario = '$_POST[usuario]' ";
            $resultado = $conexion->query($checkUsuario);
            $count = mysqli_num_rows($resultado);

            if ($count == 1) {
                echo 
                '<div class="text-center mt-5">
                    <img src="../../../../assets/images/ccStore_Azul.svg" alt="" style="width: 400px; height: auto;">
                    <h1 class="mt-2"><strong>Upps!</strong></h1>
                    <p>El nombre de usuario ya se encuentra en nuestra base de datos. <a href="../../../../adminUsuarios.html">Haga clic aquí para regresar</a></p>
                </div>';
            
            } else {
                if(isset($_POST['nombre'])){
                    $nombre = $_POST['nombre'];
                    $usuario = $_POST['usuario'];
                    $contrasena = $_POST['contrasena'];
                    $tipoUsuario = $_POST['tipoUsuario'];

                    $directorio = "imgUsuarios/";
                    $archivo = $directorio . basename($_FILES["file"]["name"]);
                    $tipoArchivo = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));

                    if($tipoArchivo == "jpg" || $tipoArchivo == "jpeg" || $tipoArchivo == "png"){
                        if(move_uploaded_file($_FILES["file"]["tmp_name"],$archivo)){
                            echo
                            "<script type='text/javascript'>
                                $(document).ready(function () {
                                    alertify.success('¡Se cargo la imagen con éxito!');
                                    return false;
                                });
                            </script>";
                        } else {
                            echo 
                            '<div class="row mt-4">
                                <div class="col-12">
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong>¡Error!</strong> Error al cargar la imagen al servidor.<br>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                </div>
                            </div>';
                        }
                        
                        $passHash = password_hash($contrasena, PASSWORD_DEFAULT);
                        $sql = "INSERT INTO usuarios (nombre, usuario, contrasena, tipoUsuario, archivo) VALUES ('$nombre', '$usuario', '$passHash', '$tipoUsuario', '$archivo')";

                        if (mysqli_query($conexion, $sql)) {
                            echo 
                            "<div class='alert alert-success text-center mt-4' role='alert'>
                                <h3>El usuario se creo con éxito</h3>
                                <a class='btn btn-success' href='../../../../adminUsuarios.html' role='button'>Regresar</a>
                            </div>";		
                        } else {
                            echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
                        }

                    } else {
                        echo
                        '<div class="text-center mt-5">
                            <img src="../../../../assets/images/ccStore_Azul.svg" alt="" style="width: 400px; height: auto;">
                            <h1 class="mt-2"><strong>Upps!</strong></h1>
                            <p>El archivo no es una imagen, solo se permiten archivos (JPG, JPEG, PNG). <a href="../../../../adminUsuarios.html">Haga clic aquí para regresar</a></p>
                        </div>';
                    }
                }
            }
            mysqli_close($conexion);
        ?>
    </body>
</html>