<?php
//VISTA-CONTROLADOR
    require 'libs/Database.php';

$db = new Database();
$clientes = $db->getClientes();
//print_r($clientes);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Clientes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="http://localhost/proyectouno/">Login </a>
      <a class="nav-item nav-link" href="misitio.php">Tablas</a>
      <a class="nav-item nav-link" href="http://localhost/proyectouno/clientes.php">Clientes</a>
    </div>
  </div>
</nav>

<div class="container">
<h1 class="p-3 mb-2 bg-primary text-white text-center text-uppercase mt-5">Clientes</h1>
<div class="d-flex justify-content-end">
<button id="btnEnviarCliente" type="submit" class="btn btn-primary mb-3">Agregar Cliente</button>
</div>
<div class="row">
<table class="table table-hover">
<thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>

  <?php foreach($clientes as $cliente):?>
  <tbody>
<!-- 
-- Editar(azul-info)= muestra modal la cual muestra la informacion actual, su boton debe decir actualizar
-- Eliminar(danger) = muestra alerta de confirmacion, y notifiacion de que se ha eliminado el registro 
-- Show(amarillo) =  Para mostrar la informacion de la tabla actual usuario seleccionado

"feature - delete" para el commit

-->
    <tr>
      <th scope="row"><?= $cliente['id'] ?></th>
      <td><?= $cliente['nombre']  ?></td>
      <td><?= $cliente['apaterno']  ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>

</table>
</div></div>

<div id="modalAgregarCliente" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Agregar Cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formAgregarCliente">
          <div class="form-group">
            <label for="nombre_cliente">Nombre:</label>
            <input type="text" class="form-control" id="nombre_modal" name="nombre_modal">
          </div>
          <div class="form-group">
            <label for="apellido_cliente">Apellido:</label>
            <input type="text" class="form-control" id="apaterno_modal" name="apaterno_modal">
          </div>
         
        </form>
      </div>
      <div class="modal-footer">
      <button id="btnGuardarCliente" type="submit" class="btn btn-success">Guardar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<script src="js/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/agregarCliente.js"></script>


</body>
</html>