<?php
//Database.php
//CONTROLADOR
require 'Conexion.php';



class Database{
private $conexion;

public function __construct(){
    $this->conexion = new Conexion();
}


public function agregarCliente($nombre, $apaterno) {
    try {
        $conn = $this->conexion->conectar();
        $query = "INSERT INTO cliente (nombre, apaterno) VALUES (:nombre, :apaterno)";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':apaterno', $apaterno);
        $stmt->execute();

        return true;
    } catch(PDOException $e) {
        echo $e;
        return false;
    }
}


public function getClientes(){

    try{
        $conn = $this -> conexion-> conectar();
        $query = "SELECT * FROM cliente;";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $row = $stmt->fetchAll();
        return $row;
    }
    catch(PDOException $e) {
        echo $e;

    }
}



}










?>