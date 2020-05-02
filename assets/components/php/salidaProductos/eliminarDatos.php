<?php 
    require_once "../conexion.php";
    $conexion = conexion();

    ini_set('date.timezone', 'America/Chihuahua');
    $hoy = date("Y-m-d H:i:s"); 

    $desde = $_POST['desde'];
    $hasta = $_POST['hasta'];

    $conexion->query("DELETE FROM salida WHERE fechaRegistro BETWEEN '$desde' AND '$hasta'");
?>