<?php
session_start();
include('../connect.php');
$a = $_POST['id'];
$k = $_POST['name'];
$b = $_POST['email'];
$c = $_POST['username'];
$d = $_POST['password'];


$sql = "INSERT INTO admin (id,name,email,username,password) VALUES (:a,:k,:b,:c,:d)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':k'=>$k,':b'=>$b,':c'=>$c,':d'=>$d));
header("location: admin.php");

	
?>