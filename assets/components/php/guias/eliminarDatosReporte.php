<?php 
    require_once "../conexion.php";
    $conexion = conexion();

    ini_set('date.timezone', 'America/Chihuahua');
    $hoy = date("Y-m-d H:i:s"); 

    $SDATE = $_POST['desde'];
    $EDATE = $_POST['hasta'];
    $empresa = $_POST['empresa'];

    $conexion->query("DELETE FROM $empresa WHERE fechaRegistro BETWEEN '$SDATE' AND '$EDATE'");
    header("Location: ../../../../guias.php");
?>