<?php

    //cabeceras y que permita descargar desde el navegador 
    header("Content-Type:application/xls");
    header("Content-Disposition: attachment; filename=reporteGuias.xls"); //nombre del documento

    date_default_timezone_set('America/Mexico_City');
    $fechaHoy = date("d/m/Y"); 

    require_once "../conexion.php";
    $conexion = conexion();
    $empresa = $_POST['empresa'];

    if($empresa == "guias_dhl"){
        $nombre_empresa = "DHL";
    } else if ($empresa == "guias_fedex"){
        $nombre_empresa = "FedEx";
    } else if ($empresa == "guias_estafeta"){
        $nombre_empresa = "Estafeta";
    }

    $SDATE = $_POST['desde'];
    //$SDATE = date("$SDATE 00:00:00");

    $EDATE = $_POST['hasta'];
    //$EDATE = date("$EDATE 23:59:59");

    $sentencia = ("SELECT * FROM $empresa WHERE fechaRegistro BETWEEN '$SDATE' AND '$EDATE'");
    $query = mysqli_query($conexion,$sentencia);

?>
    
    <table>
    <h4>Guia <?php echo"$nombre_empresa" ?> - Fecha: <?php echo"$fechaHoy" ?></h4>
            <tr>
                <th>Guia</th>
                <th>Fecha</th>
                <th>Usuario</th>
            </tr>
        <?php

        while($registros = mysqli_fetch_assoc($query)){
        ?>
            <tr >
                <td><?php echo $registros['guia']; ?></td>
                <td><?php echo $registros['fechaRegistro']; ?></td>
                <td><?php echo $registros['usuario']; ?></td>
            </tr>
        <?php
        }
        ?>
  </table>
