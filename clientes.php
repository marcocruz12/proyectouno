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
    <meta name="viewport" content="width=
    , initial-scale=1.0">
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
  <div class="row">
<table class="table table-hover">
<thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
    </tr>
  </thead>

  <?php foreach($clientes as $cliente):?>
  <tbody>

    <tr>
      <th scope="row"><?= $cliente['id'] ?></th>
      <td><?= $cliente['nombre']  ?></td>
      <td><?= $cliente['apaterno']  ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>

</table>
</div></div>
<script src="js/bootstrap.min.js"></script>
</body>
</html>