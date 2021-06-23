<?php
include("conect.php");

if(isset($_POST['btnRegister'])){
    $name = mysqli_real_escape_string($connect, $_POST['txtName']);
    $lastName = mysqli_real_escape_string($connect, $_POST['txtLastName']);
    $username = mysqli_real_escape_string($connect, $_POST['txtUsername']); 
    $email = mysqli_real_escape_string($connect, $_POST['txtEmail']); 
    $password = mysqli_real_escape_string($connect, $_POST['txtPassword']); 
    $campus = mysqli_real_escape_string($connect, $_POST['campus']);
    $sqlUser = "SELECT user_id FROM user WHERE username = '$username'";
    $resultUser = $connect -> query($sqlUser);
    $filas = $resultUser -> num_rows;
    if ($filas > 0 ){
        header('Location: register.php?status=1');
    }else{
        $sqlUserInsert = "INSERT into user(name, last_name, username, email, password, campus) 
        VALUES('$name','$lastName','$username', '$email', '$password','$campus') ";
        $resultUserInsert = $connect ->query($sqlUserInsert);
        if($resultUserInsert > 0){
            header('Location: index.php?status=2');
        }else{
            header('Location: register.php?status=2');
        }
    }
}


?>