<nav class="navbar navbar-expand-lg navbar-light ">
  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
      
    </form>
    <button type="button" class="btn btn-outline-primary crearbtn offset-7" data-target="#crear">Nuevo</button>
  </div>
</nav>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Codigo</th>
      <th scope="col">Marca/Modelo</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Precio</th>
      <th scope="col">Especificaciones</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@twitter</td>
      <td>
        <button type="button" class="btn btn-outline-warning editarbtn" data-toggle="modal" data-target="#modificar">Editar</button>
        <button type="button" class="btn btn-outline-danger eliminarbtn" data-toggle="modal" data-target="#eliminar">Eliminar</button>
      </td>
    </tr>
  </tbody>
</table>

    <?php
      include('modalEliminar.php');
      include('modalModif.php');
    ?>