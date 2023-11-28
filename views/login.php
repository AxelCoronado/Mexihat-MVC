<?php
require_once('../controllers/UsuarioController.php');

session_start();
if (isset($_SESSION["user_id"])) {
	header("Location: usuario.php");
	exit;
}
if (isset($_POST["acceder"])){
	$usuarioController = new UsuarioController();
	$usuarioController->logIn();
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<link href="./../public/img/logos/logoPes.png" type="image/x-icon" rel="shortcut icon" />
	<title>Login</title>
	<link rel="stylesheet" href="./../public/css/EstiloLogin.css">
</head>

<body>
	<div class="login-box">
		<img class="avatar" src="./../public/img/logos/logologin.png" alt="">
		<h1>Ingrese aquí</h1>
		<form action="login.php" method="POST">
			<!--USERNAME-->
			<label for="username">Usuario</label>
			<input name="correo" type="text" placeholder="Ingrese nombre de usuario" required>
			<!--Password-->
			<label for="password">Contraseña</label>
			<input name="contra" type="password" placeholder="Ingrese contraseña" required>
			<!--Botón-->
			<button name="acceder" type="submit">Acceder</button>
			<a href=" registro.php">No tengo una cuenta</a>
		</form>
	</div>
</body>

<?php if (!empty($message)) : ?>
	<p> <?= $message ?></p>
<?php endif; ?>

</html>