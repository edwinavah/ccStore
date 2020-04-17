<?php 
            require_once "../conexion.php";
            $conexion = conexion();

                $id_usuarios = $_POST['id_usuarios'];
                $nombre = $_POST['nombre'];
                $usuario = $_POST['usuario'];
                $contraseña = $_POST['contraseña'];
                $tipo_usuario = $_POST['tipo_usuario'];
            if($nombre=="" || $usuario=="" || $contraseña=="" || $tipo_usuario==""){
                ?>
                
                <?php
                echo"Campos Vacios";
            }else{
                $conexion->query("UPDATE usuarios SET nombre='".$nombre."', usuario='".$usuario."', contraseña='".$contraseña."', tipo_usuario='".$tipo_usuario."' WHERE id_usuarios='".$id_usuarios."' ");
                echo"Se guardo exitosamente";
            }
            
?>