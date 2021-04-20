<?php 

require 'admin/config.php';
require 'functions.php';

$errores = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$usuario = $_POST['usuario'];
	$pass = $_POST['password'];
	$pass = hash('sha512', $pass);


	$conexion = conexion($bd_config);
	$statement = $conexion->prepare('SELECT * FROM user WHERE username=:usuario AND passw=:password');
	$statement->execute([
		':usuario' => $usuario,
		':password' => $pass
	]);

	$resultado = $statement->fetch();
	if ($resultado != false) {
		$_SESSION['usuario'] = $usuario;
		$_SESSION['type_user'] = $resultado['type_user'];
		header('Location: '.RUTA.'admin.php');
		
	}else{
		$errores = '<li class="error">Tu usuario o contraseña son incorrectos</li>';
	}
}

require 'views/login.view.php';

?>