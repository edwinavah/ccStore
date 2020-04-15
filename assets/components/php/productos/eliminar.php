<?php 
            require_once "../conexion.php";
            include 'conexion.php';

                $id_productos = $_POST['id_productos'];
            
                $conexion->query("DELETE FROM productos WHERE id_productos='".$id_productos."' ");
                //header('Location: productos.html');
            
            
?>