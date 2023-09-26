<?php
//CONTROLADOR
require 'Conexion.php';



class Database{
private $conexion;

public function __construct(){
    $this->conexion = new Conexion();
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