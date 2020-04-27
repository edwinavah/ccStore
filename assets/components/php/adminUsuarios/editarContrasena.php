<?php 
    require_once "../conexion.php";
    $conexion = conexion();

    $id_usuariosContrasena = $_POST['id_usuariosContrasena'];
    $nuevaContrasena = $_POST['nuevaContrasena'];
    $passHash = password_hash($nuevaContrasena, PASSWORD_DEFAULT);
    if($id_usuariosContrasena=="" || $nuevaContrasena==""){
            
    } else {
        $conexion->query("UPDATE usuarios SET id_usuarios='".$id_usuariosContrasena."', contrasena='".$passHash."' WHERE id_usuarios='".$id_usuariosContrasena."' ");
        header("Location: ../../../../adminUsuarios.php");
    }
            
?>