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

    $producto = $marca." - ".$modelo;
    $accion = "Agregado";
    $movimiento = "Se agrego el producto con el stock de ".$stock;
    $nota = $usuario." agrego un nuevo producto";

    if($marca=="" || $modelo=="" || $especificaciones=="" || $stock=="" || $stock <= 0){
        
    } else {
        $conexion->query("INSERT INTO productos (codigo_barras,marca,modelo,especificaciones,stock) values ('$codigo_barras','$marca','$modelo','$especificaciones','$stock')");
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