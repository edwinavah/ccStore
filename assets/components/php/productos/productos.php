<?php
    require_once "../conexion.php";
    $conexion = conexion();
?>

<div class="row">
    <div class="col-sm-12">
        <div class="table-responsive-xl">

                <?php
                    $salida = "";
                    $sql="SELECT * FROM productos WHERE marca NOT LIKE '' ORDER BY id_productos";

                    if (isset($_POST['consulta'])) {
                        $q = $conexion->real_escape_string($_POST['consulta']);
                        $sql = "SELECT * FROM productos WHERE marca LIKE '%$q%' OR modelo LIKE '%$q%' OR codigo_barras LIKE '%$q%' OR especificaciones LIKE '%$q%'";
                    }

                    $resultado = $conexion->query($sql);
                    if ($resultado->num_rows>0) {
                        $salida.='<table class="table table-sm table-hover table-condensed table-bordered table-striped">
                                <tr>
                                    <td scope="col" class="text-center align-middle background-table d-none">ID</td>
                                    <td scope="col" class="text-center align-middle background-table">Código</td>
                                    <td scope="col" class="text-center align-middle background-table">Marca</td>
                                    <td scope="col" class="text-center align-middle background-table">Modelo</td>
                                    <td scope="col" class="text-center align-middle background-table">Especificaciones</td>
                                    <td scope="col" class="text-center align-middle background-table">Stock</td>
                                    <td scope="col" class="text-center align-middle background-table">Acciones</td>
                                </tr>';

                                $resultado = mysqli_query($conexion,$sql);
                                while($buscar=mysqli_fetch_row($resultado)) {
                                    $datos = $buscar[0]."||".
                                        $buscar[1]."||".
                                        $buscar[2]."||".
                                        $buscar[3]."||".
                                        $buscar[4]."||".
                                        $buscar[5];
                                    
                                    $salida.='<tr>
                                                <td class="align-middle d-none">'.$buscar[0].'</td>
                                                <td class="align-middle">'.$buscar[1].'</td>
                                                <td class="align-middle">'.$buscar[2].'</td>
                                                <td class="align-middle">'.$buscar[3].'</td>
                                                <td class="align-middle">'.$buscar[4].'</td>
                                                <td class="align-middle">'.$buscar[5].'</td>
                                                <td class="text-center align-middle" style="min-width: 125px; width: 125px">
                                                    <button type="button" class="btn btn-sm btn-warning editarbtn" data-toggle="modal" data-target="#modificar"><i class="far fa-edit"></i> Editar</button>
                                                    <button type="button" class="btn btn-sm btn-danger eliminarbtn" data-toggle="modal" data-target="#eliminarProducto"><i class="fas fa-trash"></i></button>
                                                </td>
                                            </tr>';
                                }
                                    $salida.="</table>";
                                }else{
                                    $salida.='<div class="row mt-3">
                                                <div class="col-12 text-center">
                                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                        <strong>¡No se encontró ningún elemento!</strong><br>
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>';
                                }
                                
                        echo $salida;
                        $conexion->close();
                ?>
        </div>
    </div>
</div>


<?php
    include('modal.php');
?>