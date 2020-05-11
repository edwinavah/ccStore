<?php 
    require_once "../conexion.php";
    $conexion = conexion();
    session_start();
    $usuario = $_SESSION['user'];

    ini_set('date.timezone', 'America/Chihuahua');
    $fechaRegistro = date("Y-m-d");
    $guiaOtros = $_POST['guiaOtros'];
    $empresa_paqueteria = $_POST['empresa_paqueteria'];

    // REVISANDO SI EXISTE UNA GUIA IGUAL
    $checkGuia = "SELECT * FROM guias_otros WHERE guia = '$guiaOtros' AND empresa = '$empresa_paqueteria'";
    $resultado = $conexion->query($checkGuia);
    $count = mysqli_num_rows($resultado);

    if ($count == 1) {
        
    } else {
        if($guiaOtros == "" || $empresa_paqueteria == ""){
            
        } else {
            $stmt = $conexion->prepare("INSERT INTO guias_otros (guia, empresa, fechaRegistro, usuario) values (?,?,?,?)");
            $stmt->bind_param("ssss",$guiaOtros,$empresa_paqueteria,$fechaRegistro,$usuario);

            echo $resultado = $stmt->execute();

            $stmt->close();
            $conexion->close();
        }
    }
?>