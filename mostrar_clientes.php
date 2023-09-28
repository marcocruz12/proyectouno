<?php 
//var_dump($_POST);

$nombre = 'No disponible';
$apaterno = 'No disponible';

if(isset($_POST['nombre']) && !empty($_POST['nombre'])) {
$nombre = $_POST['nombre'];
}   
if (isset($_POST['apaterno']) && !empty($_POST['apaterno'])) {
    $apaterno = $_POST['apaterno'];
}
// var_dump($_POST);

echo json_encode([
    "nombre" => $nombre,
    "apaterno" => $apaterno
]);

?>



