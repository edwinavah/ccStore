<?php 
    require_once "../conexion.php";
    $conexion = conexion();
    session_start();
    $usuario = $_SESSION['user'];

    ini_set('date.timezone', 'America/Chihuahua');
    $hoy = date("Y-m-d H:i:s"); 

    $id_productos = $_POST['eliminar_id'];
    $marca = $_POST['eliminar_marca'];
    $modelo = $_POST['eliminar_modelo'];
    $stock = $_POST['eliminar_stock'];
    $nota = $_POST['eliminar_nota'];

    $producto = $marca." - ".$modelo;
    $accion = "Eliminado";
    // $movimiento = "Se elimino el producto con el stock de ".$stock;
    $movimiento = "El producto contaba con ".$stock." de stock";

    if($nota==""){
        
    } else {
        $conexion->query("DELETE FROM productos WHERE id_productos='".$id_productos."' ");
        $conexion->query("INSERT INTO adminRegistros (usuario, accion, producto, movimiento, nota, fecha) values ('$usuario','$accion','$producto','$nota','$movimiento','$hoy')");
    }
?>