<?php 
             require_once "../conexion.php";
             $conexion = conexion();

                $id_usuarios = $_POST['id_usuarios'];
            
                $conexion->query("DELETE FROM usuarios WHERE id_usuarios='".$id_usuarios."' ");
                //echo("Se produjo un error, intentelo de nuevo");
            
            
?>