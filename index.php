
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

$isColor = false;

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
<table>
    <tr>
        <td>id</td>
        <td>nombre</td>
        <td>acciones</td>
    </tr>
    <?php 
    foreach($paises as $index => $paises):
    ?>
    <tr>
    <td><?php echo $index?></td>
    <td><?php echo $paises?></td>
    <td>
        <button>Agregar</button>
        <button>Eliminar</button>
    </td>

    </tr>
    <?php endforeach; ?>
</table>
    </div>
    <div class ="dos">
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
    </div></div>
</div>
    <!-- <script src="js/scripts.js"></script>-->
</body>
</html>