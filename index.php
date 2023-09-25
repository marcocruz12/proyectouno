

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/sweetalert2.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>


<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Login <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="misitio.php">Tablas</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
       <div class="row">
          <div class="col">

                <h1>Bienvenido</h1>

<form id="formMostrarClientes">
  <div class="form-group">
  <label for="nombre"> Nombre:</label>
    <input type="text" class="form-control" id="nombre" name="nombre">
    <!-- <small id="emailHelp" class="form-text text-muted">Ingresar dos nombres si es el caso.</small> -->
  </div>
  <div class="form-group">
       <label for="apaterno">Apellido paterno:</label>
        <input type="text" class="form-control" id="apaterno" name="apaterno">
  </div>

  <button id="btnEnviarClientes" type="button" class="btn btn-primary">Enviar</button>
  
</form>

          </div>
        </div>
      </div>



    <div id="modalMostrarClientes" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Datos</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
          <div class="modal-body">
              <div class="container"><div class="row"><div class="col">
                      <div class="form-group">
                          <label for="nombre_modal"> Nombre:</label>
                          <input type="text" class="form-control" id="nombre_modal" disabled>
                      </div>

                      <div class="form-group">
                          <label for="apaterno_modal"> Apellido Paterno:</label>
                          <input type="text" class="form-control" id="apaterno_modal" disabled>
                      </div>
                  </div></div></div>

                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="js/jquery-3.7.1.min.js"></script>
<script src="js/clientes.js"></script>
<!-- <script src="js/scripts.js"></script> -->
<script src="js/bootstrap.min.js"></script>



</body>

<footer class="page-footer font-small blue bg-info fixed-bottom">


  <div class="footer-copyright text-center py-3">Prueba - Bootstrap v4.6 & Sweetalert2
  </div>


</footer>


</html>