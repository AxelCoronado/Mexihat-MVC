<?php

require_once('Conexion.php');

class Usuario{
    private $id;
    private $nombre;
    private $apellido;
    private $correo;
    private $contra;
    private $pais;
    private $estado;
    private $calle;
    private $colonia;
    private $numCasa;
    private $codigo;
    private $tel;

    //Constructor
    public function __construct($id, $nombre, $apellido, $correo, $contra, $pais, $estado, $calle, $colonia, $numCasa, $codigo, $tel){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->correo = $correo;
        $this->contra = $contra;
        $this->pais = $pais;
        $this->estado = $estado;
        $this->calle = $calle;
        $this->colonia = $colonia;
        $this->numCasa = $numCasa;
        $this->codigo = $codigo;
        $this->tel = $tel;
    }

    public function getId() { return $this->id; }
    public function getNombre() { return $this->nombre; }
    public function getApellido() { return $this->apellido; }
    public function getCorreo() { return $this->correo; }
    public function getPais() { return $this->pais; }
    public function getEstado() { return $this->estado; }
    public function getCalle() { return $this->calle; }
    public function getColonia() { return $this->colonia; }
    public function getNumCasa() { return $this->numCasa; }
    public function getCodigo() { return $this->codigo; }
    public function getTel() { return $this->tel; }

    public function logIn($correo, $contr){
        $conexion = new Conexion();
        $conn = $conexion->connect();
        $sql = "SELECT * FROM Cliente WHERE correo_C = '$correo' AND contra_C = '$contr'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if($result){
            $_SESSION['user_id'] = $result['id_cliente'];
            return true;
        }else{
            return false;
        }
    }

    public function getUserById($id){
        $conexion = new Conexion();
        $conn = $conexion->connect();
        $sql = "SELECT * FROM Cliente WHERE id_cliente = '$id'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if($result){
            return $result;
        } else {
            echo "Error";
        }
    }

    public function register($id_cliente, $nombre, $apellidos, $correo, $contra, $edad, $sexo, $pais, $estado, $calle, $colonia, $numCasa, $CP, $telefono){
        $conexion = new Conexion();
        $conn = $conexion->connect();
        $sql = "INSERT INTO Cliente (id_cliente, nombre_C, apellidos_C, correo_C, contra_C, edad_C, sexo_C, pais_C, estado_C, calle_C, colonia_C, numCasa_C, CP_C, telefono_C) VALUES ('$id_cliente', '$nombre', '$apellidos', '$correo', '$contra', '$edad', '$sexo', '$pais', '$estado', '$calle', '$colonia', '$numCasa', '$CP', '$telefono')";
        $stmt = $conn->prepare($sql);
        $result = $stmt->execute();
        if($result){
            $_SESSION['user_id'] = $id_cliente;
            return true;
        } else {
            return false;
        }
    }

    public function getMaxIdClient(){
        $conexion = new Conexion();
        $conn = $conexion->connect();
        $sql = "SELECT MAX(id_cliente) as id_cliente FROM Cliente";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if($result){
            return $result['id_cliente'];
        } else {
            echo "Error";
        }
    }
}

?>