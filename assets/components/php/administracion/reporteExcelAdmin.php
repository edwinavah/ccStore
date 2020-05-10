<?php

    //cabeceras y que permita descargar desde el navegador 
    header("Content-Type:application/xls");
    header("Content-Disposition: attachment; filename=reporteAdministracion.xls"); //nombre del documento

    date_default_timezone_set('America/Mexico_City');
    $fechaHoy = date("d/m/Y");

    require_once "../conexion.php";
    $conexion = conexion();

    $SDATE = $_POST['desde'];
    $SDATE = date("$SDATE 00:00:00");

    $EDATE = $_POST['hasta'];
    $EDATE = date("$EDATE 23:59:59");

    $sentencia = ("SELECT * FROM adminRegistros WHERE fecha BETWEEN '$SDATE' AND '$EDATE'");
    $query = mysqli_query($conexion,$sentencia);

?>
    <table>
            <tr>
            <h4>Reporte de Administracion - Fecha: <?php echo"$fechaHoy" ?></h4>
                <th>Usuario</th>
                <th>Accion</th>
                <th>Producto</th>
                <th>Nota</th>
                <th>Fecha - Hora</th>
            </tr>
        <?php

        while($registros = mysqli_fetch_assoc($query)){
        ?>
            <tr >
                <td><?php echo $registros['usuario']; ?></td>
                <td><?php echo $registros['accion']; ?></td>
                <td><?php echo $registros['producto']; ?></td>
                <td><?php echo $registros['nota']; ?></td>
                <td><?php echo $registros['fecha']; ?></td>
            </tr>
        <?php
        }
        ?>
  </table>
