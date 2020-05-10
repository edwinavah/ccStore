<?php 
    require_once "../conexion.php";
    $conexion = conexion();

    $id_productos = $_POST['id_productos'];
    $codigo_barras = $_POST['codigo_barras'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $especificaciones = $_POST['especificaciones'];

    $stockDescontado = $_POST['stockDescontado'];

    $fechaActual = $_POST['fechaRegistro'];
    $usuario = $_POST['usuario'];


        

        $stockDescontado += $stockActual;
        $conexion->query("UPDATE productos SET stock =' stock + ".$stockDescontado."' WHERE id_productos='".$id_productos."' ");
        
        $conexion->query("DELETE FROM salida WHERE id_productos='".$id_productos."' ");
?>