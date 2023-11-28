<?php
require_once('./../controllers/UsuarioController.php');
require_once('./../models/Pedido.php');

class PedidoController {
    private $pedido;
    private $usuarioController;

    public function __construct() {
        $this->usuarioController = new UsuarioController();
        $this->pedido = new Pedido();
    }

    public function insertarPedido($id_cliente,$id_modelo,$fecha,$cantidad,$total,$envio) {
        $result = $this->pedido->getMaxPedido();
        $idp = intval($result['id_Pedido']);
        $idpi = $idp + 1;

        $pedido_insertado = $this->pedido->insertPedido($idpi,$id_cliente,$id_modelo,$fecha,$cantidad,$total,$envio);
        if ($pedido_insertado) {
            echo "<script>
				alert('Pedido Realizado');
				window.location= './../views/catalogo.php';
			</script>";
        } else {
            echo "<script>
				alert('Fallo al realizar pedido.\nEspecifique el tipo de envio.');
				window.location= './../index.php';
			</script>";
        }
    }

    public function getUltimoPedidoUsuario($id_cliente) {
        $result = $this->pedido->getUltimoPedUsuario($id_cliente);
        return $result;
    }
}
?>