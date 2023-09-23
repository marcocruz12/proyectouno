
<!--?php

$color = '#000';
$isColor = false;

if(!$isColor){
    $color = '#510bd3';
} else {
    $color = '#ff9300';

}



?>
-->

<?php 

$isColor = true;

$paises = array (
    0 => "Canada",
    1 => "Chile",
    2 => "Mexico",
    3 => "India",


)

?>



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
    <!--<h1 style="background-color:?php echo $color ?>;" class="uno">Hola mundo</h1> -->
    <?php if(!$isColor){ ?>
    <h1 style="background-color:red;" class="p-3 mb-2 bg-success text-white text-center">Hola mundo : FALSE</h1>
    <?php 
    } else {
    ?>
     <h1 style="background-color:green;" class="p-3 mb-2 bg-success text-white text-center">Hola mundo : TRUE</h1>

     <?php 
    }
    ?>
    <div class ="container">
    <div class ="dos">
<table class="table table-striped">
<thead class="thead-dark">
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Nombre</th>
        <th scope="col">Acciones</th>
    </tr>
    </thead>
    <?php 
    foreach($paises as $index => $paises):
    ?>
     <tbody>
    <tr>
    <th scope="row"><?php echo $index?></th>
    <td><?php echo $paises?></td>
    <td>
        <!-- <button type="button" class="btn btn-info" onclick=mostrarID(<?php echo $index ?>)>Ver ID</button> -->
         <!-- <button type="button" class="btn btn-info alert-button" data-id="<?php echo $index ?>">Ver ID</button> -->
         <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" onclick="mostrarID(<?php echo $index ?>)">
         Ver ID
</button>

<button type="button" class="btn btn-success btnjs" id="btnjs">
        ID JS
</button>

<button type="button" class="btn btn-warning" onclick="mostrarJS()">
        ID JS2
</button>

    </td>

    </tr>
    <?php endforeach; ?>
</table>

</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tu ID</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="modal-body-content" >
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

    </div>

    <div class="container" id="container2">

    <div class="p-3 mb-2 bg-primary text-white text-center text-uppercase display-4">Javascript</div>


<div class="row mt-5 p-3" id="primero" >

  <div class="col p-3 bg-primary"><div class="p-3 border bg-light">Bootstrap 4, which was released in 2018, as an upgrade to Bootstrap 3, with new components, faster stylesheetc, more responsiveness, etc. Bootstrap 3 and Bootstrap 4 is still supported by the team for critical bugfixes and documentation changes, and it is perfectly safe to continue to use them. However, new features will NOT be added to them.</div></div>
  <div class="col p-3 bg-primary"><div class="p-3 border bg-light">
Bootstrap 5 (released 2021) is the newest version of Bootstrap; It supports the latest, stable releases of all major browsers and platforms. However, Internet Explorer 11 and down is not supported.

The main differences between Bootstrap 5 and Bootstrap 3 & 4, is that Bootstrap 5 has switched to JavaScript instead of jQuery.</div></div>

   
  </div>   
<div class = "buttons mx-auto">
<button type="button" class="btn btn-success" id="btn1">
        Change
</button>
<button type="button" class="btn btn-success" id="btn2">
        Back
</button></div>

<div class="row mt-3" id="segundo">
    <div class="col bg-light p-5">
    Las tres partes del patrón de diseño de software MVC se pueden describir de la siguiente manera:
    <br><br>
    <ul class="list-group">
  <li class="list-group-item">Modelo: Maneja datos y lógica de negocios.</li>
  <li class="list-group-item">Vista: Se encarga del diseño y presentación.</li>
  <li class="list-group-item">Controlador: Enruta comandos a los modelos y vistas.</li>
</ul>


    </div>
  </div>   
<div class = "buttons mx-auto">
<button type="button" class="btn btn-success" id="btn3">
        Change
</button>
<button type="button" class="btn btn-success" id="btn4">
        Back
</button></div>




<div class="row mt-3" id="tercero">
    <div class="col-sm-12 container-xl-12 bg-light">
    <form class="p-3">
  <div class="form-row align-items-center">
  <div class="col-auto">
      <label class="sr-only" for="inlineFormInputGroup">Username</label>
      <div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0ZM1.5 8a6.5 6.5 0 1 0 13 0 6.5 6.5 0 0 0-13 0Zm3.82 1.636a.75.75 0 0 1 1.038.175l.007.009c.103.118.22.222.35.31.264.178.683.37 1.285.37.602 0 1.02-.192 1.285-.371.13-.088.247-.192.35-.31l.007-.008a.75.75 0 0 1 1.222.87l-.022-.015c.02.013.021.015.021.015v.001l-.001.002-.002.003-.005.007-.014.019a2.066 2.066 0 0 1-.184.213c-.16.166-.338.316-.53.445-.63.418-1.37.638-2.127.629-.946 0-1.652-.308-2.126-.63a3.331 3.331 0 0 1-.715-.657l-.014-.02-.005-.006-.002-.003v-.002h-.001l.613-.432-.614.43a.75.75 0 0 1 .183-1.044ZM12 7a1 1 0 1 1-2 0 1 1 0 0 1 2 0ZM5 8a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm5.25 2.25.592.416a97.71 97.71 0 0 0-.592-.416Z"></path></svg></i></div>
        </div>
        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username">
      </div>
    </div>
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInputGroup">Password</label>
      <div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text">@</div>
        </div>
        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Password">
      </div>
    </div>
    <div class="col-auto">
      <button type="submit" class="btn btn-primary mb-2">Login</button>
    </div>
  </div>
</form>
    </div>
  </div>   
<div class = "buttons mx-auto">
<button type="button" class="btn btn-success" id="btn5">
        Hide
</button>
<button type="button" class="btn btn-success" id="btn6">
        Show
</button></div>


    <!--   <div class ="dos">
        <ul>
            <li>4</li>
            <li>5</li>
            <li>6</li>
        </ul>
    </div>
    <div class ="container2">
  <div class ="tres">
        <ul>
            <li>4</li>
            <li>5</li>
            <li>6</li>
        </ul>
    </div>
    <div class ="tres">
        <ul>
            <li>4</li>
            <li>5</li>
            <li>6</li>
        </ul>
    </div></div> -->
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