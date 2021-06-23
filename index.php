<?php
include 'conect.php';
session_start();
if (isset($_SESSION['id_user'])) {
	header("Location: home.php");
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
			echo (' <div class="alert alert-danger alert-dismissible fade show" role="alert">
			Datos incorrectos!
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div> ');
		}
		if ($status == 2) {
			echo (' <div class="alert alert-primary alert-dismissible fade show" role="alert">
			Registro realizado Correctamente !
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div> '); 
		}
		?>

		<div class="row justify-content-center">
			<div class="col-md-6 text-center mb-5">
				<h2 class="heading-section">Login</h2>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-7 col-lg-5">
				<div class="login-wrap p-4 p-md-5">
					<div class="icon d-flex align-items-center justify-content-center">
						<span class="fa fa-user-o"></span>
					</div>
					<h3 class="text-center mb-4">Bienvenido</h3>
					<form action="login_do.php" class="login-form" method="POST">
						<div class="form-group">
							<input type="text" class="form-control rounded-left" placeholder="Nombre de Usuario" required id="username" name="username" required>
						</div>
						<div class="form-group d-flex">
							<input type="password" class="form-control rounded-left" placeholder="Contraseña" id="password" name="password" required>
						</div>
						<div class="form-group">
							<button type="submit" name="btnLogin" class="form-control btn btn-primary rounded submit px-3">Ingresar</button>
						</div>
						<div class="form-group d-md-flex">
							<div class="w-100 text-md-center">
								<a href="register.php">Registrarse</a>
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