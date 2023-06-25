<?php
session_start();
include('../connect.php');
$a = $_POST['day'];
$k = $_POST['breakfast'];
$b = $_POST['lunch'];
$d= $_POST['dinner'];



$sql = "INSERT INTO mess (day,breakfast,lunch,dinner) VALUES (:a,:k,:b,:d)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':k'=>$k,':b'=>$b,':d'=>$d));
header("location: mess.php");

	
?>