<?php
include 'header.php';

if (isset($_POST['btnEditSubject'])) { 
    $subjectId = mysqli_real_escape_string($connect, $_POST['id']);
    $day = mysqli_real_escape_string($connect, $_POST['day']);
    $name = mysqli_real_escape_string($connect, $_POST['txtNameSubject']);
    $schedule = mysqli_real_escape_string($connect, $_POST['schedule']);
    $teacher = mysqli_real_escape_string($connect, $_POST['txtTeacher']);
    $credits = mysqli_real_escape_string($connect, $_POST['txtCredits']);
    $sqlSubject = "UPDATE subject SET name = '$name', schedule = '$schedule', day = '$day', teacher = '$teacher', credits = '$credits'
                    WHERE subject_id = '$subjectId'"; 
    $resultSubject = $connect -> query($sqlSubject);
    header('Location: home.php?status=success-edit');
}
?>
