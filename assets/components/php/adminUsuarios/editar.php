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
        <title>ccStore | Editar Usuario</title>
    </head>
    <body>
        <?php 
            require_once "../conexion.php";
            $conexion = conexion();

            if(isset($_POST['id_usuarios'])){
                $id_usuarios = $_POST['id_usuarios'];
                $nombre = $_POST['nombre'];
                $usuario = $_POST['usuario'];
                $fechaRegistro = $_POST['fechaRegistro'];
                $tipoUsuario = $_POST['tipoUsuario'];

                $directorio = "imgUsuarios/";
                $archivo = $directorio . basename($_FILES["file"]["name"]);
                $tipoArchivo = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));

                if($tipoArchivo == ""){
                    if($nombre=="" || $usuario=="" || $tipoUsuario==""){

                    } else {
                        $conexion->query("UPDATE usuarios SET id_usuarios='".$id_usuarios."', nombre='".$nombre."', usuario='".$usuario."', tipoUsuario='".$tipoUsuario."' WHERE id_usuarios='".$id_usuarios."' ");
                        header("Location: ../../../../adminUsuarios.php");
                    }
                } else {
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
                        
                        if($nombre=="" || $usuario=="" || $tipoUsuario==""){

                        } else {
                            $conexion->query("UPDATE usuarios SET id_usuarios='".$id_usuarios."', nombre='".$nombre."', usuario='".$usuario."', tipoUsuario='".$tipoUsuario."', archivo='".$archivo."' WHERE id_usuarios='".$id_usuarios."' ");
                            header("Location: ../../../../adminUsuarios.php");
                        }

                    } else {
                        header("Location: ../../../../adminUsuarios.php");
                    }
                }
            }
            // $id_usuarios = $_POST['id_usuarios'];
            // $nombre = $_POST['nombre'];
            // $usuario = $_POST['usuario'];
            // $contrasena = $_POST['contrasena'];
            // $passHash = password_hash($contrasena, PASSWORD_DEFAULT);
            // $tipoUsuario = $_POST['tipoUsuario'];
            // $perfil = $_POST['perfil'];

            // if($nombre=="" || $usuario=="" || $contrasena=="" || $tipoUsuario==""){

            // } else {
            //     $conexion->query("UPDATE usuarios SET id_usuarios='".$id_usuarios."', nombre='".$nombre."', usuario='".$usuario."', contrasena='".$passHash."', tipoUsuario='".$tipoUsuario."' WHERE id_usuarios='".$id_usuarios."' ");
            //     echo
            //     '<div class="alert alert-success alert-dismissible fade show" role="alert">
            //         <strong>Guardado. </strong> El proceso fue exitoso.
            //         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            //         <span aria-hidden="true">&times;</span>
            //         </button>
            //     </div>';
            // }
        ?>
    </body>
</html>