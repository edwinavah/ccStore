<?php 
    require_once "../conexion.php";
    $conexion = conexion();

    ini_set('date.timezone', 'America/Chihuahua');
    $hoy = date("Y-m-d H:i:s"); 

    $SDATE = $_POST['desde'];
    $SDATE = date("$SDATE 00:00:00");

    $EDATE = $_POST['hasta'];
    $EDATE = date("$EDATE 23:59:59");

    $conexion->query("DELETE FROM adminRegistros WHERE fecha BETWEEN '$SDATE' AND '$EDATE'");

    header("Location: ../../../../administracion.php");
?>