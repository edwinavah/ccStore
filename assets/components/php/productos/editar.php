<?php 
    require_once "../conexion.php";
    $conexion = conexion();
    session_start();
    $usuario = $_SESSION['user'];

    ini_set('date.timezone', 'America/Chihuahua');
    $hoy = date("Y-m-d H:i:s");

    $id_productos = $_POST['id_productos'];
    $codigo_barras = $_POST['codigo_barras'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $especificaciones = $_POST['especificaciones'];
    $stock = $_POST['stock'];
    $stock_anterior = $_POST['stock_anterior'];

    $producto = $marca." - ".$modelo;
    $accion = "Modificado";
    if($marca=="" || $modelo=="" || $especificaciones=="" || $stock_anterior=="" || $stock=="" || $stock_anterior < 0 || $stock < 0){

    } else if($stock_anterior!=$stock) {
        $nota = "Se actualizo el stock de ".$stock_anterior." a ".$stock;
        $conexion->query("UPDATE productos SET codigo_barras='".$codigo_barras."', marca='".$marca."', modelo='".$modelo."', especificaciones='".$especificaciones."', stock='".$stock."' WHERE id_productos='".$id_productos."' ");
        $conexion->query("INSERT INTO adminRegistros (usuario, accion, producto, nota, fecha) values ('$usuario','$accion','$producto','$nota','$hoy')");
        
        echo
        '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Guardado. </strong> El proceso fue exitoso.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        ';
    } else {
        $nota = "Se actualizaron campos del producto";
        $conexion->query("UPDATE productos SET codigo_barras='".$codigo_barras."', marca='".$marca."', modelo='".$modelo."', especificaciones='".$especificaciones."', stock='".$stock."' WHERE id_productos='".$id_productos."' ");
        $conexion->query("INSERT INTO adminRegistros (usuario, accion, producto, nota, fecha) values ('$usuario','$accion','$producto','$nota','$hoy')");
        
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