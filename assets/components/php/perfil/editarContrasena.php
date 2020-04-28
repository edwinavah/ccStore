<?php 
    require_once "../conexion.php";
    $conexion = conexion();

    $id_usuarios = $_POST['id_usuarios'];
    $contrasena = $_POST['confirmar_contrasena'];
    $passHash = password_hash($contrasena, PASSWORD_DEFAULT);
    if($id_usuarios=="" || $passHash==""){
            
    } else {
        $conexion->query("UPDATE usuarios SET contrasena='".$passHash."' WHERE id_usuarios='".$id_usuarios."'");
    }
?>