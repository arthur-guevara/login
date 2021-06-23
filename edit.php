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
                <h1>Editar Materia</h1>
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
                <form action="edit_do.php" class="login-form" method="POST">
                    <label for="username">Nombre Materia</label>
                    <div class="form-group">
                        <input type="text" class="form-control rounded-left" required id="txtNameSubject" name="txtNameSubject" placeholder="<?php echo $materias['name']; ?>" required>
                    </div>
                    <label for="username">Horario</label>
                    <div class="form-group d-flex">
                        <select class="form-control" id="schedule" name="schedule" aria-placeholder="<?php echo $materias['schedule']; ?>">
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
                        <input type="text" class="form-control rounded-left" required id="txtTeacher" name="txtTeacher"  placeholder="<?php echo $materias['teacher']; ?>" required>
                    </div>
                    <label for="number">Cantidad de Créditos</label>
                    <div class="form-group d-flex">
                        <input type="number" class="form-control rounded-left" id="txtCredits" name="txtCredits" placeholder="<?php echo $materias['credits']; ?>" required>
                        <input type="hidden" name="id" id="id" value="<?php echo$idReturn; ?>">
                    </div>
                    <div class="form-group">
                        <button type="submit" name="btnEditSubject" class="form-control btn btn-primary rounded submit px-3">Actualizar Materia</button>
                    </div>
                </form>
            <?php } ?>
            </div>
        </div>
    </div>
</body>

</html>