<?php 
    require_once "../conexion.php";
    $conexion = conexion();

    $id_productos = $_POST['id_productos'];
    $codigo_barras = $_POST['codigo_barras'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $especificaciones = $_POST['especificaciones'];
    $stock = $_POST['stock'];

    if($stock==""){

    } else {
        $conexion->query("UPDATE productos SET stock='".$stock."' WHERE id_productos='".$id_productos."' ");
        
        $conexion->query("INSERT INTO salida (codigo_barras,marca,modelo,stock) values ('$codigo_barras','$marca','$modelo','$stock')");
    }
?>