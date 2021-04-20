<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>LOGIN</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
		<form action="<?php echo htmlspecialchars('login.php'); ?>" method="post">
			<div class="input-group">
				<input type="text" class="form-control" name="usuario" placeholder="Usuario">
			</div>
			<div class="input-group">
				<input type="password" class="form-control" name="password" placeholder="Contraseña">
			</div>

			<ul>
				<?php if(!empty($errores)): ?>
				<?php echo $errores ?>
				<?php endif; ?>
			</ul>

			<button type="submit" name="submit" class="btn btn-warning">Ingresar</button>
		</form>

		<a href="<?php echo RUTA. 'registro.php' ?>" class="login-link" style="color: yellow;">¿No tienes cuenta?</a>
	</div>
</body>
</html>