<?php 
    require_once "../conexion.php";
    $conexion = conexion();
    session_start();
    $usuario = $_SESSION['user'];

    ini_set('date.timezone', 'America/Chihuahua');
    $fechaRegistro = date("Y-m-d");
    $guiaDHL = $_POST['guiaDHL'];

    // REVISANDO SI EXISTE UNA GUIA IGUAL
    $checkGuia = "SELECT * FROM guias_dhl WHERE guia = '$guiaDHL'";
    $resultado = $conexion->query($checkGuia);
    $count = mysqli_num_rows($resultado);

    if ($count == 1) {
        
    } else {
        if($guiaDHL==""){
            
        } else {
            $stmt = $conexion->prepare("INSERT INTO guias_dhl (guia, fechaRegistro, usuario) values (?,?,?)");
            $stmt->bind_param("sss",$guiaDHL,$fechaRegistro,$usuario);

            echo $resultado = $stmt->execute();

            $stmt->close();
            $conexion->close();
        }
    }
?>