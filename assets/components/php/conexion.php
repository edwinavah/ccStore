<?php
    function conexion(){
        // $servidor = "mysql";
        $servidor = "127.0.0.1";
        $usuario = "iProxy";
        $bd = "ccStore";
        $password = "GV*DD*4AeCQy7-F";
        $conexion = mysqli_connect($servidor, $usuario, $password, $bd);

        return $conexion;
    }
?>
