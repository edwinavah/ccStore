<?php 
    require_once "../conexion.php";
    $conexion = conexion();

    $id_salida = $_POST['delete_id_salida'];
    $id_productos = $_POST['delete_id_pruductos'];
    $stockProductos = $_POST['delete_stockProductos'];
    $stockDescontado = $_POST['delete_stockDescontado'];

    $stock = $stockProductos + $stockDescontado;
    $conexion->query("UPDATE productos SET stock = '".$stock."' WHERE id_productos='".$id_productos."'");
    $conexion->query("DELETE FROM salida WHERE id_salida='".$id_salida."'");
?>