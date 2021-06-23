<?php
include 'conect.php';
session_start();

#Valida si existe la sesion
if (isset($_SESSION['id_user'])) {
	header("Location: index.php");
}

?>
<!doctype html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/style.css">

</head>

<body>

	<div class="container">
	<?php
		error_reporting(0);
		$status = $_GET["status"];
		if ($status == 1) {
			echo (' <div class="alert alert-warning alert-dismissible fade show" role="alert">
			Nombre de usuario ya existente!
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div> ');
		}
		if ($status == 2) {
			echo (' <div class="alert alert-danger alert-dismissible fade show" role="alert">
			Error al registrar usuario.
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div> ');
		}
		?>
		<div class="row justify-content-center">
			<div class="col-md-6 text-center mb-5">
				<h2 class="heading-section">Registro</h2>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-7 col-lg-5">
				<div class="login-wrap p-4 p-md-5">
					<div class="icon d-flex align-items-center justify-content-center">
						<span class="fa fa-pencil"></span>
					</div>
					<h3 class="text-center mb-4">Ingresa tus datos</h3>
					<form action="register_do.php" class="login-form" method="POST">
						<label for="username">Nombre(s)</label>
						<div class="form-group">
							<input type="text" class="form-control rounded-left" required id="txtName" name="txtName" required>
						</div>
						<label for="username">Apellidos</label>
						<div class="form-group">
							<input type="text" class="form-control rounded-left" required id="txtLastName" name="txtLastName" required>
						</div>
						<label for="username">Nombre de usuario</label>
						<div class="form-group">
							<input type="text" class="form-control rounded-left" required id="txtUsername" name="txtUsername" required>
						</div>
						<label for="email">Correo electrónico</label>
						<div class="form-group d-flex">
							<input type="email" class="form-control rounded-left" id="txtEmail" name="txtEmail" required>
						</div>
						<label for="contraseña">Contraseña</label>
						<div class="form-group d-flex">
							<input type="password" class="form-control rounded-left" id="txtPassword" name="txtPassword" alt="strongPass" required>
						</div>
						<label for="username">Campus</label>
						<div class="form-group d-flex">
							<select class="form-control" id="campus" name="campus">
								<option>Juarez</option>
								<option>Justo Sierra</option>
								<option>Reforma</option>
								<option>Torres Landa</option>
								<option>Paraisos</option>
							</select>
						</div>
						<div class="form-group">
							<button type="submit" name="btnRegister" class="form-control btn btn-primary rounded submit px-3">Registrarse</button>
						</div>
						<div class="form-group d-md-flex">
							<div class="w-100 text-md-center">
								<a href="index.php">Iniciar sesión</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>