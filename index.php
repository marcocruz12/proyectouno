

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/sweetalert2.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Tabla paises</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="http://localhost/proyectouno/">Home </a>
      <a class="nav-item nav-link" href="misitio.php">Tabla </a>
    </div>
  </div>
</nav>


<div class="container  mt-5">
  <div class="row">
    <div class="col">
      <h1>Bienvenidos</h1>
    <form action="mostrar_clientes.php" method="POST">

  <div class="form-group">
      <label for="name">Nombre:</label>
      <input type="text" class="form-control" id="nombre" name="nombre" />
  </div>
    
  <div class="form-group">
      <label for="apaterno">Apellido paterno:</label>
      <input type="text" class="form-control" id="paterno" name="apaterno" />
  </div>

  <button type="submit" class="btn btn-primary" > Enviar</button>
  
  
</form>




    </div>
  </div>
</div>







<footer class="page-footer font-small blue bg-info mt-5">


  <div class="footer-copyright text-center py-3">Prueba - Bootstrap v4.6 & Sweetalert2
  </div>


</footer>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="js/jquery-3.7.1.min.js"></script>

<script src="js/sweetalert2.all.min.js"></script>
<script src="js/scripts.js"></script>

</body>
</html>