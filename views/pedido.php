<?php
require_once('./../controllers/UsuarioController.php');
require_once('./../controllers/CatalogoController.php');
require_once('./../controllers/PedidoController.php');

$Mod = '';
date_default_timezone_set('America/Mexico_City');
$fecha=date('d/m/o');

if(!empty($_GET['vari'])){
	$_SESSION['Mod']=$_GET['vari'];
	$Mod = $_GET['vari'];
}else{
	$Mod=$_SESSION['Mod'];
}

if (isset($_SESSION["user_id"])) {
	$usuarioController = new UsuarioController();
	$user = $usuarioController->getUser();

	$catalogoController = new CatalogoController();
	$catalogo = $catalogoController->getCatalogo($Mod);


	if (!empty($_POST['cantidadPro_P']) && !empty($_POST['realizarPedido'])) {
		if(empty($_POST['envio'])){
			echo "<script>alert('Por favor, rellene el campo de envío');</script>";
		}else{
			if($_POST['cantidadPro_P']>5){
				$total=$_POST['cantidadPro_P']*$catalogo['precioMay_M'];
			}else{
				$total=$_POST['cantidadPro_P']*$catalogo['precioMen_M'];
			}
			$cantidad=$_POST['cantidadPro_P'];
			$envio=$_POST['envio'];
			$pedidoController = new PedidoController();
			$pedidoController->insertarPedido($user['id_cliente'],$Mod,$fecha,$cantidad,$total,$envio);
		}
	}
} else {
	header('Location: ./../index.php');
}
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<link href="./../public/img/logos/logoPes.png" type="image/x-icon" rel="shortcut icon"/> 
    	<title>Pedido</title>
    	<link rel="stylesheet" href="./../public/css/EstiloPedido.css">
    </head>
	<body>
		<div class="login-box">
			<img class="avatar" src="./../public/img/logos/pedido.jpg" alt="">
			<h1>Mi pedido</h1>
			<form action = "pedido.php" method="POST">
				<!--USERNAME-->
				<label for="username">Nombre</label>
				<input type="text" value="<?php echo $user['nombre_C']." ".$user['apellidos_C']; ?>" placeholder="Ingrese su nombre">
				<!--Correo-->
				<label for="correo">Correo</label>
				<input type="text" value="<?php echo $user['correo_C']; ?>" placeholder="Ingrese su correo">
				<!--Serie Modelos-->
				<label for="serie">Serie Modelo</label>
				<input type="text" value="<?php echo $catalogo['id_modelo']; ?>" placeholder="">
				<!--Modelos-->
				<label for="modelo">Modelo</label>
				<input type="text" value="<?php echo $catalogo['nombre_M']; ?>" placeholder="">
				<!--Cantidad-->
				<label for="cantidad">Cantidad</label><br>
				<select name="cantidadPro_P" id="cantidad">
					<option value=1>1</option>
					<option value=2>2</option>
					<option value=3>3</option>
					<option value=4>4</option>
					<option value=5>5</option>
					<option value=6>6</option>
					<option value=7>7</option>
					<option value=8>8</option>
					<option value=9>9</option>
					<option value=10>10</option>
				</select><br>
				<!--Sexo-->
				<label for="envio"><br>Envío</label><br>
				<input type="radio" name="envio" value="León">León Gto
				<input type="radio" name="envio" value="Nacional">Nacional
				<input type="radio" name="envio" value="Internacional">Internacional
				<!--Fecha-->
				<label for="fecha">Fecha del Pedido</label>
				<input type="text" value="<?php echo $fecha; ?>" placeholder="">
				<!--País-->
				<label for="pais">País</label>
				<input type="text" value="<?php echo $user['pais_C']; ?>" placeholder="Ingrese nombre del país">
				<!--Estado-->
				<label for="estado">Estado</label>
				<input type="text" value="<?php echo $user['estado_C']; ?>" placeholder="Ingrese nombre del estado">
				<!--calle-->
				<label for="calle">Calle</label>
				<input type="text" value="<?php echo $user['calle_C']; ?>" placeholder="Ingrese nombre de la calle">
				<!--colonia-->
				<label for="colonia">Colonia</label>
				<input type="text" value="<?php echo  $user['colonia_C']; ?>" placeholder="Ingrese nombre de la colonia">
				<!--numero-->
				<label for="numero">Núm</label>
				<input type="text" value="<?php echo $user['numCasa_C']; ?>" placeholder="Ingrese número de casa">
				<!--cp-->
				<label for="cp">Código Postal</label>
				<input type="text" value="<?php echo  $user['CP_C'] ?>" placeholder="Ingrese código postal">
				<!--telefono-->
				<label for="telefono">Teléfono</label>
				<input type="text" value="<?php echo $user['telefono_C']; ?>" placeholder="(ejem. 4771234567)">
				<!--Botón-->
				<input name="realizarPedido" type="submit" value="Confirmar Pedido"><br><br>
			</form>
		</div>
	</body>    
</html>
