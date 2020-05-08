<?php

    //cabeceras y que permita descargar desde el navegador 
    header("Content-Type:application/xls");
    header("Content-Disposition: attachment; filename=SalidaProductos.xls"); //nombre del documento

    //require('../../Classes/PHPExcel.php');
    require_once "../conexion.php";
    $conexion = conexion();

    $SDATE = $_POST['desde'];
    $SDATE = date("$SDATE 00:00:00");

    $EDATE = $_POST['hasta'];
    $EDATE = date("$EDATE 23:59:59");

    $sentencia = ("SELECT * FROM salida WHERE fechaRegistro BETWEEN '$SDATE' AND '$EDATE'");
    $query = mysqli_query($conexion,$sentencia);

?>
    <table>
            <tr>
                <th>Codigo de Barras</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Stock</th>
                <th>Fecha-Hora</th>
                <th>Usuario</th>
            </tr>
        <?php

        while($registros = mysqli_fetch_assoc($query)){
        ?>
            <tr >
                <td><?php echo $registros['codigo_barras']; ?></td>
                <td><?php echo $registros['marca']; ?></td>
                <td><?php echo $registros['modelo']; ?></td>
                <td><?php echo $registros['stock']; ?></td>
                <td><?php echo $registros['fechaRegistro']; ?></td>
                <td><?php echo $registros['usuario']; ?></td>
            </tr>
        <?php
        }
        ?>
  </table>
