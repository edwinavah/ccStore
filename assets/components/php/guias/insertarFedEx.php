<?php 
    require_once "../conexion.php";
    $conexion = conexion();
    session_start();
    $usuario = $_SESSION['user'];

    ini_set('date.timezone', 'America/Chihuahua');
    $fechaRegistro = date("Y-m-d");
    $guiaFedEx = $_POST['guiaFedEx'];

    // REVISANDO SI EXISTE UNA GUIA IGUAL
    $checkGuia = "SELECT * FROM guias_fedex WHERE guia = '$guiaFedEx'";
    $resultado = $conexion->query($checkGuia);
    $count = mysqli_num_rows($resultado);

    if ($count == 1) {
        
    } else {
        if($guiaFedEx==""){
            
        } else {
            $stmt = $conexion->prepare("INSERT INTO guias_fedex (guia, fechaRegistro, usuario) values (?,?,?)");
            $stmt->bind_param("sss",$guiaFedEx,$fechaRegistro,$usuario);

            echo $resultado = $stmt->execute();

            $stmt->close();
            $conexion->close();
        }
    }
?>