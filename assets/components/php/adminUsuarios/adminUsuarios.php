<?php
    require_once "../conexion.php";
    $conexion = conexion();
?>

<body>
    <?php
        $sentencia = "SELECT * FROM usuarios";
        $query = mysqli_query($conexion, $sentencia);
        while ($buscar = mysqli_fetch_row($query)) {
            $datos = $buscar[0]."||".
                $buscar[1]."||".
                $buscar[2]."||".
                $buscar[3]."||".
                $buscar[4]."||".
                $buscar[5];
    ?>
    
    <div class="row mb-2">
        <div class="col-12 col-lg-4">
            <div class="card" style="width: 18rem;">
                <img src="assets/components/php/adminUsuarios/<?php echo $buscar[5] ?>" class="card-img-top" alt="Error en cargar imagen de usuario">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $buscar[1] ?></h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><?php echo $buscar[0] ?></li>
                    <li class="list-group-item"><?php echo $buscar[2] ?></li>
                    <li class="list-group-item"><?php echo $buscar[4] ?></li>
                </ul>
                <div class="card-body">
                    <button type="button" class="btn btn-dark editarbtn" data-toggle="modal" data-target="#modificarUsuario"><i class="far fa-edit"></i> Modificar</button>
                    <button type="button" class="btn btn-dark eliminarbtn" data-toggle="modal" data-target="#eliminarUsuario"><i class="fas fa-trash"></i> Eliminar </button>
                </div>
            </div>
        </div>
    </div>

    <?php
        }
    ?>
</body>

<?php
    include('modalUsuario.php');
?>