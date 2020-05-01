<?php 
    require_once "../conexion.php";
    $conexion = conexion();

    $id_productos = $_POST['id_productos'];
    $codigo_barras = $_POST['codigo_barras'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $especificaciones = $_POST['especificaciones'];
    $stockActual = $_POST['stock'];
    $stockDescontado = $_POST['stockDescontado'];
    $fechaActual = $_POST['fechaRegistro'];
    $usuario = $_POST['usuario'];


    if($stockDescontado == ""){
        ?>
        <script>alert("Campos Vacios")</script>
        <?php
    }
    else if($stockDescontado > $stockActual){
        ?>
        <script>alert("Campos Vacios")</script>
        <?php
    }else {
        $stockActual -= $stockDescontado;
        $conexion->query("UPDATE productos SET stock='".$stockActual."' WHERE id_productos='".$id_productos."' ");
        
        $conexion->query("INSERT INTO salida (codigo_barras,marca,modelo,stock,fechaRegistro,usuario) values ('$codigo_barras','$marca','$modelo','$stockDescontado','$fechaActual','$usuario')");
               
    }
?>