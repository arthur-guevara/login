<?php
include 'header.php';
$idReturn = $_GET['id'];
$sqlSubjectEdit = "SELECT subject_id, name, schedule, day, teacher, credits FROM subject
WHERE subject_id = '$idReturn'";
$resultSubject = $connect->query($sqlSubjectEdit);
$rowSubject = $resultSubject->fetch_all(MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 my-4">
                <h1>Borrar Materia</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <a href="home.php"><i class="fa fa-arrow-left" aria-hidden="true"></i>Regresar</a>
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
                            </tr>
                    </tbody>
                </table>
            <?php } ?>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <a href="delete_do.php?id=<?php echo$idReturn; ?>" class="btn btn-danger">Eliminar</a>
            </div>
        </div>
    </div>
</body>

</html>