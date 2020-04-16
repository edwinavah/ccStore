<?php
    require_once "../conexion.php";
    $conexion = conexion();
?>

<div class="row mt-4">
    <div class="col-sm-12">
        <div class="table-responsive-xl">
            <table class="table table-sm table-hover table-condensed table-bordered table-striped mt-3">
                <thead>
                    <tr>
                        <td scope="col" class="text-center align-middle background-table">Código</td>
                        <td scope="col" class="text-center align-middle background-table">Marca</td>
                        <td scope="col" class="text-center align-middle background-table">Modelo</td>
                        <td scope="col" class="text-center align-middle background-table">Especificaciones</td>
                        <td scope="col" class="text-center align-middle background-table">Precio</td>
                        <td scope="col" class="text-center align-middle background-table">Stock</td>
                    </tr>
                </thead>
                
                <?php
                    $sql="SELECT id_productos, codigo_barras, marca, modelo, especificaciones, precio, stock FROM productos WHERE stock < 3";
                    $resultado = mysqli_query($conexion,$sql);

                    while($buscar=mysqli_fetch_row($resultado)) {
                        $datos = $buscar[0]."||".
                            $buscar[1]."||".
                            $buscar[2]."||".
                            $buscar[3]."||".
                            $buscar[4]."||".
                            $buscar[5]."||".
                            $buscar[6];
                ?>

                <tr>
                    <td class="align-middle"><?php echo $buscar[1]?></td>
                    <td class="align-middle"><?php echo $buscar[2]?></td>
                    <td class="align-middle"><?php echo $buscar[3]?></td>
                    <td class="align-middle"><?php echo $buscar[4]?></td>
                    <td class="align-middle"><?php echo $buscar[5]?></td>
                    <td class="align-middle"><?php echo $buscar[6]?></td>
                </tr>
                
                <?php
                    }
                ?>
            </table>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>¡Actualiza los productos!</strong> Los productos están por agotarse, no olvides actualizar el stock.<br>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
</div>