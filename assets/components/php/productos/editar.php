<?php 
            require_once "../conexion.php";
            $conexion = conexion();

                $id_productos = $_POST['id_productos'];
                $codigo_barras = $_POST['codigo_barras'];
                $marca = $_POST['marca'];
                $modelo = $_POST['modelo'];
                $especificaciones = $_POST['especificaciones'];
                $precio = $_POST['precio'];
                // $stock = $_POST['stock'];
                if($codigo_barras=="" || $marca=="" || $modelo=="" || $especificaciones=="" || $precio==""){
                ?>
                
                <?php
                echo"Campos Vacios";
            }else{
                $conexion->query("UPDATE productos SET codigo_barras='".$codigo_barras."', marca='".$marca."', modelo='".$modelo."', especificaciones='".$especificaciones."', precio='".$precio."' WHERE id_productos='".$id_productos."' ");
                echo"Se guardo exitosamente";
            }
            
?>