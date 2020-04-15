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
            <script>alert("Campos Vacios")
            </script>
            <?php
        }else{
            echo"<script>alert('Se agrego correctamente')</script>";
            $conexion->query("INSERT INTO productos (codigo_barras,marca,modelo,especificaciones,precio,stock) values ('$codigo_barras','$marca','$modelo','$especificaciones','$precio','$stock')");
            //header('Location: .php');
            }  
?>