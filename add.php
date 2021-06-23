<?php
include 'header.php';
?>
<?php
error_reporting(0);
$status = $_GET["status"];
if ($status == 'already-register') {
    echo (' <div class="alert alert-warning alert-dismissible fade show" role="alert">
			Materia ya registrada !
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div> ');
}
if ($status == 'error-add') {
    echo (' <div class="alert alert-danger alert-dismissible fade show" role="alert">
			Error al registrar.
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div> ');
}

?>

<body>
    <div class="container my-3">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="add_subject.php" class="login-form" method="POST">
                    <label for="username">Nombre Materia</label>
                    <div class="form-group">
                        <input type="text" class="form-control rounded-left" required id="txtNameSubject" name="txtNameSubject" required>
                    </div>
                    <label for="username">Horario</label>
                    <div class="form-group d-flex">
                        <select class="form-control" id="schedule" name="schedule">
                            <option>7:00 am</option>
                            <option>8:00 am</option>
                            <option>9:00 am</option>
                            <option>10:00 am</option>
                            <option>11:00 am</option>
                        </select>
                    </div>
                    <div class="form-group d-flex">
                        <select class="form-control" id="day" name="day">
                            <option>Lunes</option>
                            <option>Martes</option>
                            <option>Miercoles</option>
                            <option>Jueves</option>
                            <option>Viernes</option>
                        </select>
                    </div>
                    <label for="username">Maestro</label>
                    <div class="form-group">
                        <input type="text" class="form-control rounded-left" required id="txtTeacher" name="txtTeacher" required>
                    </div>
                    <label for="number">Cantidad de Créditos</label>
                    <div class="form-group d-flex">
                        <input type="number" class="form-control rounded-left" id="txtCredits" name="txtCredits" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="btnAddSubject" class="form-control btn btn-primary rounded submit px-3">Agregar Materia</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


</body>

</html>