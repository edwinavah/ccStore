<?php 
            require_once "conexion.php";
            $conexion = conexion();

            session_start();
            $usuario = $_POST['usuario'];
            $contrasena = $_POST['contrasena'];

            $q = " SELECT COUNT(*) as contar FROM usuarios WHERE usuario = '$usuario' and contrasena = '$contrasena' ";
            $consulta = mysqli_query($conexion, $q);
            $array= mysqli_fetch_array($consulta);

            if($array['contar']){
                header("Location: ../../../panel.html");
            }else{
                echo"error";
            }
?>