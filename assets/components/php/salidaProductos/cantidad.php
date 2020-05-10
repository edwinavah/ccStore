<?php 
    require_once "../conexion.php";
    $conexion = conexion();

    $id_productos = $_POST['id_productos'];
    $stockActual = $_POST['stock'];
    $stockDescontado = $_POST['stockDescontado'];
    $fechaActual = $_POST['fechaRegistro'];
    $usuario = $_POST['usuario'];


    if($stockDescontado == "" || $stockDescontado > $stockActual || $stockDescontado <= 0){

    }else {
        $stockActual -= $stockDescontado;
        $conexion->query("UPDATE productos SET stock='".$stockActual."' WHERE id_productos='".$id_productos."' ");
        
        $conexion->query("INSERT INTO salida (id_productos, stock_salida, fechaRegistro, usuario) values ('$id_productos','$stockDescontado','$fechaActual','$usuario')");
               
    }
?>