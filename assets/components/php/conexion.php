<?php
    function conexion(){
        $servidor = "mysql";
        $usuario = "ccStore";
        $bd = "ccstoreinventarios";
        $password = "GV*DD*4AeCQy7-F";
        $conexion = mysqli_connect($servidor, $usuario, $password, $bd);

        return $conexion;
    }
?>
