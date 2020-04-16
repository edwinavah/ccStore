<?php 
            require_once "../conexion.php";
            $conexion = conexion();

            $id_productos = $_POST['id_productos'];
            $codigo_barras = $_POST['codigo_barras'];
            $marca = $_POST['marca'];
            $modelo = $_POST['modelo'];
            $especificaciones = $_POST['especificaciones'];
            $precio = $_POST['precio'];
            $stock = $_POST['stock'];

        if($codigo_barras=="" || $marca=="" || $modelo=="" || $especificaciones=="" || $precio=="" || $stock==""){
            ?>
                
            <?php
            echo"Campos vacios";
        }else{
            $conexion->query("INSERT INTO productos (codigo_barras,marca,modelo,especificaciones,precio,stock) values ('$codigo_barras','$marca','$modelo','$especificaciones','$precio','$stock')");
            echo"Se guardo exitosamente";
            }  
?>