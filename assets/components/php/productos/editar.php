<?php 
    require_once "../conexion.php";
    $conexion = conexion();
    session_start();
    $usuario = $_SESSION['user'];

    ini_set('date.timezone', 'America/Chihuahua');
    $hoy = date("Y-m-d H:i:s");

    $id_productos = $_POST['editar_id'];
    $codigo_barras = $_POST['editar_codigo_barras'];
    $marca = $_POST['editar_marca'];
    $modelo = $_POST['editar_modelo'];
    $especificaciones = $_POST['editar_especificaciones'];
    $stock = $_POST['editar_stock'];
    $stock_anterior = $_POST['editar_stock_anterior'];
    $nota = $_POST['editar_nota'];

    $producto = $marca." - ".$modelo;
    $accion = "Modificado";

    if($marca=="" || $modelo=="" || $especificaciones=="" || $stock_anterior=="" || $stock=="" || $stock_anterior < 0 || $stock < 0 || $nota==""){

    } else if($stock_anterior!=$stock) {
        $movimiento = "Se actualizo el stock de ".$stock_anterior." a ".$stock;
        $conexion->query("UPDATE productos SET codigo_barras='".$codigo_barras."', marca='".$marca."', modelo='".$modelo."', especificaciones='".$especificaciones."', stock='".$stock."' WHERE id_productos='".$id_productos."' ");
        $conexion->query("INSERT INTO adminRegistros (usuario, accion, producto, movimiento, nota, fecha) values ('$usuario','$accion','$producto','$movimiento','$nota','$hoy')");
        
        echo
        '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Guardado. </strong> El proceso fue exitoso.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        ';
    } else {
        $movimiento = "Se actualizaron campos del producto";
        $conexion->query("UPDATE productos SET codigo_barras='".$codigo_barras."', marca='".$marca."', modelo='".$modelo."', especificaciones='".$especificaciones."', stock='".$stock."' WHERE id_productos='".$id_productos."' ");
        $conexion->query("INSERT INTO adminRegistros (usuario, accion, producto, movimiento, nota, fecha) values ('$usuario','$accion','$producto','$movimiento','$nota','$hoy')");
        
        echo
        '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Guardado. </strong> El proceso fue exitoso.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        ';
    }
            
?>