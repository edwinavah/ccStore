<?php

    //cabeceras y que permita descargar desde el navegador 
    header("Content-Type:application/xls");
    header("Content-Disposition: attachment; filename=SalidaProductos.xls"); //nombre del documento

    date_default_timezone_set('America/Mexico_City');
    $fechaHoy = date("d/m/Y");
    
    require_once "../conexion.php";
    $conexion = conexion();

    $SDATE = $_POST['desde'];
    $SDATE = date("$SDATE 00:00:00");

    $EDATE = $_POST['hasta'];
    $EDATE = date("$EDATE 23:59:59");

    $sentencia = ("SELECT productos.codigo_barras AS codigo_barras, productos.marca AS marca, productos.modelo AS modelo, stock_salida, fechaRegistro, usuario 
    FROM salida INNER JOIN productos ON salida.id_productos = productos.id_productos WHERE fechaRegistro BETWEEN '$SDATE' AND '$EDATE'");
    $query = mysqli_query($conexion,$sentencia);

?>
    <table>
            <tr>
            <h4>Reporte Salida de Productos - Fecha: <?php echo"$fechaHoy" ?></h4>
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
                <td><?php echo $registros['stock_salida']; ?></td>
                <td><?php echo $registros['fechaRegistro']; ?></td>
                <td><?php echo $registros['usuario']; ?></td>
            </tr>
        <?php
        }
        ?>
  </table>
