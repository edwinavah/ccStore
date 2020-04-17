<?php
require_once "../conexion.php";
$conexion = conexion();
?>

<body>

    <?php
    $sentencia = "SELECT * FROM usuarios";
    $query = mysqli_query($conexion, $sentencia);
    while ($registros = mysqli_fetch_array($query)) {
    ?>
        <br>
        <div class="card" style="width: 18rem;">
            <img src="assets/components/php/adminUsuarios/imgUsuarios/nathalia.jpg" class="card-img-top" alt="error al cargar">
            <div class="card-body">
                <h5 class="card-title"><?php echo $registros['nombre'] ?></h5>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><?php echo $registros['id_usuarios'] ?></li>
                <li class="list-group-item"><?php echo $registros['usuario'] ?></li>
                <li class="list-group-item"><?php echo $registros['tipoUsuario'] ?></li>
            </ul>
            <div class="card-body">
                <button type="button" class="btn btn-dark editarbtn" data-toggle="modal" data-target="#modificarUsuario"><i class="far fa-edit"></i> Modificar</button>
                <button type="button" class="btn btn-dark eliminarbtn" data-toggle="modal" data-target="#eliminarUsuario"><i class="fas fa-trash"></i> Eliminar </button>
            </div>
        </div>
    <?php
    }
    ?>
</body>
<?php
    include('modalUsuario.php');
?>