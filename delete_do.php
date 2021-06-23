<?php 
require 'conect.php';
$returnId = $_GET['id'];
$sqlDelete = "DELETE FROM subject WHERE subject_id = $returnId";
$resultDelete = $connect -> query($sqlDelete);
header('Location: home.php?status=success-delete');
?>