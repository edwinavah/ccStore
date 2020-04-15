<?php
    function conexion(){
        $servidor = "localhost";
        $usuario = "root";
        $bd = "ccStoreInventarios";
        $password = "";
        $conexion = mysqli_connect($servidor, $usuario, $password, $bd);

        return $conexion;
    }
?>
