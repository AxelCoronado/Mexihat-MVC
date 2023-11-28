<?php
session_start();
require_once('./../controllers/UsuarioController.php');

if (isset($_SESSION['user_id'])) {
	header('Location: usuario.php');
}

if (isset($_POST["registro"])){
	$usuarioController = new UsuarioController();
	$usuarioController->registerUser( $_POST['nombre_C'], $_POST['apellidos_C'], $_POST['correo_C'], $_POST['contra_C'], $_POST['edad_C'], $_POST['sexo_C'], $_POST['pais_C'], $_POST['estado_C'], $_POST['calle_C'], $_POST['colonia_C'], $_POST['numCasa_C'], $_POST['CP_C'], $_POST['telefono_C'] );
}
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<link href="./../public/img/logos/logoPes.png" type="image/x-icon" rel="shortcut icon"/> 
    	<title>Registro</title>
    	<link rel="stylesheet" href="./../public/css/EstiloRegistro.css">
    </head>
	<body>
		<div class="login-box">
			<img class="avatar" src="./../public/img/logos/logologin.png" alt="">
			<h1>Registrarse ahora</h1>
			<form action="registro.php" method="POST">
				<!--USERNAME-->
				<label for="username">Nombre de Usuario</label>
				<input name="nombre_C" type="text" placeholder="Ingrese nombre de usuario" required>
				
				<label for="apellidos">Apellidos</label>
				<input name="apellidos_C" type="text"  placeholder="Ingrese apellidos" required>
				
				<!--Correo-->
				<label for="correo">Correo</label>
				<input name="correo_C" type="text" placeholder="Ingrese su correo" required>
				<!--Password-->
				<label for="password">Contraseña</label>
				<input name="contra_C" type="password" placeholder="Ingrese contraseña" required>
				<!--Password-->
				<label for="password">Confirmar contraseña</label>
				<input name="confirmPass" type="password" placeholder="Ingrese contraseña" required>
				<!--Edad-->
				<label for="edad">Edad</label><br>
				<select name="edad_C" id="edad_C">
					<option value=17>17</option>
					<option value=18>18</option>
					<option value=19>19</option>
					<option value=20>20</option>
					<option value=21>21</option>
					<option value=22>22</option>
					<option value=23>23</option>
					<option value=24>24</option>
					<option value=25>25</option>
					<option value=26>26</option>
					<option value=27>27</option>
					<option value=28>28</option>
					<option value=29>29</option>
					<option value=30>30</option>
				</select>
				<!--Sexo-->
				<label for="sexo"><br>Sexo</label><br>
				<select name="sexo_C" id="sexo_C">
					<option value="M">M</option>
					<option value="H">H</option>
				</select>
				
				<br><br><label for="pais">Pais</label>
				<input name="pais_C" type="text" placeholder="Ingrese nombre de usuario" required>
				
				<label for="estado">Estado</label>
				<input name="estado_C" type="text" placeholder="Ingrese nombre de usuario" required>
				
				<!--calle-->
				<label for="calle"><br>Calle</label>
				<input name="calle_C" type="text" placeholder="Ingrese nombre de la calle" required>
				<!--colonia-->
				<label for="colonia">Colonia</label>
				<input name="colonia_C" type="text" placeholder="Ingrese nombre de la colonia" required>
				<!--numero-->
				<label for="numero">Núm</label>
				<input name="numCasa_C" type="text" placeholder="Ingrese número de casa" required>
				<!--cp-->
				<label for="cp">Código Postal</label>
				<input name="CP_C" type="text" placeholder="Ingrese código postal" required>
				<!--telefono-->
				<label for="telefono">Teléfono</label>
				<input name="telefono_C" type="text" placeholder="(ejem. 4771234567)" required>
				<!--Botón-->
				<center>
				<button name="registro" type="submit">Registrarse</button><br><br>
				<!--<button type="button" onclick="javascript:void(window.open('UsuarioP.php'));" title="">Registrarse</button><br><br>--></center>
			</form>
		</div>
	</body>    
</html>