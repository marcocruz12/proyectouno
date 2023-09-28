<?php
require 'libs/Database.php';

if((isset($_POST['nombre']) && !empty($_POST['nombre'])) && isset($_POST['apaterno']) && !empty($_POST['apaterno'])) {

    $nombre = $_POST['nombre'];
    $apaterno = $_POST['apaterno'];

    $database = new Database();
    $success = $database->agregarCliente($nombre, $apaterno);

    echo json_encode(['success' => $success]);
}
