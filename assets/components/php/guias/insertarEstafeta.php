<?php 
    require_once "../conexion.php";
    $conexion = conexion();
    session_start();
    $usuario = $_SESSION['user'];

    ini_set('date.timezone', 'America/Chihuahua');
    $fechaRegistro = date("Y-m-d");
    $guiaEstafeta = $_POST['guiaEstafeta'];

    // REVISANDO SI EXISTE UNA GUIA IGUAL
    $checkGuia = "SELECT * FROM guias_estafeta WHERE guia = '$guiaEstafeta'";
    $resultado = $conexion->query($checkGuia);
    $count = mysqli_num_rows($resultado);

    if ($count == 1) {
        
    } else {
        if($guiaEstafeta==""){
            
        } else {
            $stmt = $conexion->prepare("INSERT INTO guias_estafeta (guia, fechaRegistro, usuario) values (?,?,?)");
            $stmt->bind_param("sss",$guiaEstafeta,$fechaRegistro,$usuario);

            echo $resultado = $stmt->execute();

            $stmt->close();
            $conexion->close();
        }
    }
?>