<?php
session_start();
include 'conect.php';

if(!empty($_POST)){
    $username = mysqli_real_escape_string($connect, $_POST['username']); 
    $password = mysqli_real_escape_string($connect, $_POST['password']);
    $sql = "SELECT user_id FROM user WHERE username = '$username' AND password = '$password'";
    $result = $connect -> query($sql);
    $rows = $result -> num_rows;
    if($rows > 0 ){
        $row = $result -> fetch_assoc();
        $_SESSION['id_user'] = $row['user_id'];
        header("Location: home.php");
    }else{
        header('Location: index.php?status=1');
    }
}
       
?>