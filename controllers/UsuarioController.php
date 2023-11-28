<?php

require_once('./../models/Usuario.php');

class UsuarioController{

    public function logIn(){
        $correo = $_POST['correo'];
        $contra = $_POST['contra'];

        $userModel = new Usuario('','','','','','','','','','','','', '');

        $result = $userModel->logIn($correo, $contra);
        
        if($result == true){
            header("Location: ./../views/usuario.php");
        } else {
			echo "<script>javascript:alert('Contraseña incorrecta');</script>";
        }
    }
    
    public function logOut(){
        session_start();
        session_unset();
        session_destroy();
        header("Location: ./../index.php");
    }

    public function getUser(){
        $id = $_SESSION['user_id'];

        $userModel = new Usuario('','','','','','','','','','','','', '');

        $result = $userModel->getUserById($id);

        return $result;
    }

    public function registerUser($nombre, $apellidos, $correo, $contra, $edad, $sexo, $pais, $estado, $calle, $colonia, $numCasa, $CP, $telefono ){
        $userModel = new Usuario('', '', '', '', '', '', '', '', '', '', '', '', '');

        $id_cliente = $userModel->getMaxIdClient() + 1;
        

        $result = $userModel->register($id_cliente, $nombre, $apellidos, $correo, $contra, $edad, $sexo, $pais, $estado, $calle, $colonia, $numCasa, $CP, $telefono);

        if($result == true){
            header("Location: ./../views/login.php");
        } else {
            echo "<script>javascript:alert('Error al registrar');</script>";
        }

    }
}

?>
