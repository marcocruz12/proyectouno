
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <!--<h1 style="background-color:?php echo $color ?>;" class="uno">Hola mundo</h1> -->
    <?php if(!$isColor){ ?>
    <h1 style="background-color:red;" class="uno">Hola mundo : FALSE</h1>
    <?php 
    } else {
    ?>
     <h1 style="background-color:green;" class="uno">Hola mundo : TRUE</h1>

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
         <button type="button" class="btn btn-info alert-button" data-id="<?php echo $index ?>">Ver ID</button>
    </td>

    </tr>
    <?php endforeach; ?>
</table>
    </div>
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
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<script src="js/jquery-3.7.1.min.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>