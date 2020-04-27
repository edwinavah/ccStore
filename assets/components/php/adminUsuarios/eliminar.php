<?php 
    require_once "../conexion.php";
    $conexion = conexion();

    $id_usuarios = $_POST['id_usuarios'];
    $archivo = $_POST['archivo'];

    $conexion->query("DELETE FROM usuarios WHERE id_usuarios='".$id_usuarios."'");
    unlink($archivo);
?>