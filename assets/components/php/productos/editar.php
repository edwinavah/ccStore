<?php 
            require_once "../conexion.php";
            $conexion = conexion();

                $id_productos = $_POST['id_productos'];
                $codigo_barras = $_POST['codigo_barras'];
                $marca = $_POST['marca'];
                $modelo = $_POST['modelo'];
                $especificaciones = $_POST['especificaciones'];
                $stock = $_POST['stock'];
                if($marca=="" || $modelo=="" || $especificaciones=="" || $stock==""){
                    //echo'
                    //<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    //    <strong>Error. </strong> No se permiten campos vacios.
                    //    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    //    <span aria-hidden="true">&times;</span>
                    //    </button>
                    //</div>
                    //';
            }else{
                $conexion->query("UPDATE productos SET codigo_barras='".$codigo_barras."', marca='".$marca."', modelo='".$modelo."', especificaciones='".$especificaciones."', stock='".$stock."' WHERE id_productos='".$id_productos."' ");
                echo'
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Guardado. </strong> El proceso fue exitoso.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                ';
            }
            
?>