<?php
session_start();
include('../connect.php');
$a = $_POST['sname'];
$k = $_POST['usn'];
$b = $_POST['mobile'];
$c = $_POST['floor'];
$d = $_POST['room'];
$e = $_POST['cfor'];
$f = $_POST['details'];

 
$sql = "INSERT INTO scomplaint (sname,usn,mobile,floor,room,cfor,details) VALUES (:a,:k,:b,:c,:d,:e,:f)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':k'=>$k,':b'=>$b,':c'=>$c,':d'=>$d,':e'=>$e,':f'=>$f));
header("location: usercomplaint.php");
	
?>