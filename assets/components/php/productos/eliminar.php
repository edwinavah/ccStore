<?php 
             require_once "../conexion.php";
             $conexion = conexion();

                $id_productos = $_POST['id_productos'];
            
                $conexion->query("DELETE FROM productos WHERE id_productos='".$id_productos."' ");
                //echo("Se produjo un error, intentelo de nuevo");
            
            
?>