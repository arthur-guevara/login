<?php
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">

<body>
    <div class="container">
        <?php
        error_reporting(0);
        $status = $_GET["status"];
        if ($status == 'success-edit') {
            echo (' <div class="alert alert-success alert-dismissible fade show" role="alert">
			Materia Modificada !
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div> ');
        }
        if ($status == 'success-add') {
            echo (' <div class="alert alert-success alert-dismissible fade show" role="alert">
			Materia agregada !
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div> ');
        }
        if ($status == 'success-delete') {
            echo (' <div class="alert alert-danger alert-dismissible fade show" role="alert">
			Materia Borrada !
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div> ');
        }

        ?>
        <div class="row">
            <div class="col-12 my-4">
                <h1>Materias Registradas</h1>
            </div>
        </div>
        <div class="row">

            <div class="col-12">
                <a href="add.php"><i class="fa fa-plus" aria-hidden="true"></i>Agregar Materia</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 m-1">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Código de Materia</th>
                            <th scope="col">Nombre Materia</th>
                            <th scope="col">Horario</th>
                            <th scope="col">Dia</th>
                            <th scope="col">Profesor</th>
                            <th scope="col">Créditos</th>
                            <th scope="col">Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($rowSubject as $materias) { ?>
                            <tr>
                                <td> <?php echo $materias['subject_id']; ?> </td>
                                <td> <?php echo $materias['name']; ?> </td>
                                <td> <?php echo $materias['schedule']; ?> </td>
                                <td> <?php echo $materias['day']; ?> </td>
                                <td> <?php echo $materias['teacher']; ?> </td>
                                <td> <?php echo $materias['credits']; ?> </td>
                                <td> <a href="edit.php?id=<?php echo $materias['subject_id'] ?>"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp&nbsp&nbsp</a>
                                    <a href="delete.php?id=<?php echo $materias['subject_id'] ?>"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</body>

</html>