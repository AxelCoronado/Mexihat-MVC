<?php
require_once('Conexion.php');

class Catalogo {
    private $conn;

    public function __construct() {
        $conexion = new Conexion();
        $this->conn = $conexion->connect();
    }

    public function getModelo($id) {
        $query = "SELECT * FROM Modelo WHERE id_modelo = '$id';";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }


    public function getModelos() {
        $query = "SELECT * FROM Modelo;";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
}
?>