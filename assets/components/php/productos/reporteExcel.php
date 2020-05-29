<?php
    //Cabeceras y que permita descargar desde el navegador 
    header("Content-Type:application/xls");
    header("Content-Disposition: attachment; filename=reporteProductos.xls"); //nombre del documento

    date_default_timezone_set('America/Mexico_City');
    $fechaHoy = date("d/m/Y");

    require_once "../conexion.php";
    $conexion = conexion();

    $sentencia = ("SELECT * FROM productos");
    $query = mysqli_query($conexion,$sentencia);

?>
    <table>
            <tr>
            <h4 style="text-align: center;">Reporte de Productos - Fecha: <?php echo"$fechaHoy" ?></h4>
                <th>ID</th>
                <th>Codigo de barras</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Especificaciones</th>
                <th>Stock</th>
            </tr>
        <?php

        while($registros = mysqli_fetch_assoc($query)){
        ?>
            <tr >
                <td><?php echo $registros['id_productos']; ?></td>
                <td><?php echo $registros['codigo_barras']; ?></td>
                <td><?php echo $registros['marca']; ?></td>
                <td><?php echo $registros['modelo']; ?></td>
                <td><?php echo $registros['especificaciones']; ?></td>
                <td><?php echo $registros['stock']; ?></td>
            </tr>
        <?php
        }
        ?>
  </table>