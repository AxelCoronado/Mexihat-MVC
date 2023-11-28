<?php
session_start();
require_once('./../models/Catalogo.php');

class CatalogoController {

    private $catalogo;


    public function __construct() {
        $this->catalogo = new Catalogo();
    }

    public function getCatalogos() {
        $results = $this->catalogo->getModelos();
        return $results;
    }

    public function getCatalogo($id) {
        $results = $this->catalogo->getModelo($id);
        return $results;
    }
}
?>