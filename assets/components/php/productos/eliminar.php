<?php 
    require_once "../conexion.php";
    $conexion = conexion();
    session_start();
    $usuario = $_SESSION['user'];

    ini_set('date.timezone', 'America/Mexico_City');
    $hoy = date("Y-m-d H:i:s"); 

    $id_productos = $_POST['delete_id'];
    $marca = $_POST['delete_marca'];
    $modelo = $_POST['delete_modelo'];
    $stock = $_POST['delete_stock'];

    $producto = $marca." - ".$modelo;
    $modificacion = "Eliminado";
    $nota = "Se elimino el producto con el stock de ".$stock;
    
    $conexion->query("DELETE FROM productos WHERE id_productos='".$id_productos."' ");
    $conexion->query("INSERT INTO adminRegistros (usuario, modificacion, producto, nota, fecha) values ('$usuario','$modificacion','$producto','$nota','$hoy')");
    //echo("Se produjo un error, intentelo de nuevo");
    
?>