<?php
include 'conect.php';
include 'header.php';

if (isset($_POST['btnAddSubject'])) { 
    $userId =  $row['user_id'] ;
    $day = mysqli_real_escape_string($connect, $_POST['day']);
    $name = mysqli_real_escape_string($connect, $_POST['txtNameSubject']);
    $schedule = mysqli_real_escape_string($connect, $_POST['schedule']);
    $teacher = mysqli_real_escape_string($connect, $_POST['txtTeacher']);
    $credits = mysqli_real_escape_string($connect, $_POST['txtCredits']);
    $sqlSubject = "SELECT subject_id FROM subject WHERE name = '$name'"; 
    $resultSubject = $connect -> query($sqlSubject);
    $filas = $resultSubject -> num_rows;
    if ($filas > 0 ){
        header('Location: add.php?status=already-register');
       
    }else{

        $sqlSubjectInsert = "INSERT into subject(user_id, name, schedule, day, teacher, credits) 
                            VALUES('$userId','$name','$schedule','$day', '$teacher', '$credits')";
        $resultSubjectInsert = $connect ->query($sqlSubjectInsert);
        if($resultSubjectInsert > 0){
            header ('Location: home.php?status=success-add');
        }else{
            header ('Location: add.php?status=error-add');
        }
    }   
}
