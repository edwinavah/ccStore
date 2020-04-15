<?php
    require_once "../conexion.php";
    $conexion = conexion();
?>

<div class="row">
    <div class="col-12 col-lg-5">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Buscar producto">
            <div class="input-group-append">
                <button class="btn btn-outline-success" data-toggle="modal" data-target="#buscar_cliente">Buscar <i class="fas fa-search"></i></button>
                <button type="button" class="btn btn-outline-primary ml-4" data-target="#crear">Agregar producto   <i class="fas fa-plus"></i></button>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="table-responsive-xl">
            <table class="table table-sm table-hover table-condensed table-bordered table-striped mt-3">
                <thead>
                    <tr>
                        <td scope="col" class="text-center align-middle background-table">ID</td>
                        <td scope="col" class="text-center align-middle background-table">Código</td>
                        <td scope="col" class="text-center align-middle background-table">Marca</td>
                        <td scope="col" class="text-center align-middle background-table">Modelo</td>
                        <td scope="col" class="text-center align-middle background-table">Especificaciones</td>
                        <td scope="col" class="text-center align-middle background-table">Precio</td>
                        <td scope="col" class="text-center align-middle background-table">Stock</td>
                        <td scope="col" class="text-center align-middle background-table">Acciones</td>
                    </tr>
                </thead>
                
                <?php
                    $sql="SELECT id_productos, codigo_barras, marca, modelo, especificaciones, precio, stock FROM productos";
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

                <tbody>
                    <tr>
                        <td class="align-middle"><?php echo $buscar[0]?></td>
                        <td class="align-middle"><?php echo $buscar[1]?></td>
                        <td class="align-middle"><?php echo $buscar[2]?></td>
                        <td class="align-middle"><?php echo $buscar[3]?></td>
                        <td class="align-middle"><?php echo $buscar[4]?></td>
                        <td class="align-middle"><?php echo $buscar[5]?></td>
                        <td class="align-middle"><?php echo $buscar[6]?></td>
                        <td class="text-center align-middle" style="min-width: 150px;">
                            <button type="button" class="btn btn-outline-warning editarbtn" data-toggle="modal" data-target="#modificar">Editar</button>
                            <button type="button" class="btn btn-outline-danger eliminarbtn" data-toggle="modal" data-target="#eliminar">Eliminar</button>
                        </td>
                    </tr>
                </tbody>
                
                <?php
                    }
                ?>
            </table>
        </div>
    </div>
</div>


<?php
    include('modal.php');
?>