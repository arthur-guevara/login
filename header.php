<?php
include 'conect.php';
session_start();

#Valida si existe la sesion
if (!isset($_SESSION['id_user'])) {
    header("Location: index.php");
}

#Obtiene datos de usuario
$idUser = $_SESSION['id_user'];
$sql = "SELECT user_id, username, name, last_name, email, campus FROM user 
        WHERE user_id = '$idUser'";
$result = $connect->query($sql);
$row = $result->fetch_assoc();

#Obtiene datos de la materia del usuario
$sqlSubject = "SELECT subject_id, name, schedule, day, teacher, credits FROM subject
                WHERE user_id = '$idUser'";
$resultSubject = $connect -> query($sqlSubject);
$rowSubject = $resultSubject -> fetch_all(MYSQLI_ASSOC);


#HTML Header
echo('
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">

    <script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
</head>
<header>
    <div id="logotipo">
        <img src="images/logo.png">
        <a href="home.php"><h1>Panel de administración</h1></a>
    </div>
</header>
<nav>
    <ul>
        <li class="logout">
            <a href="logout.php">Cerrar Sesion</a>
        </li>
        <li>
        <a>Bienvenido: ');
echo($row['name']); 
echo('</a>
    </li>
    </ul>
</nav>
');
