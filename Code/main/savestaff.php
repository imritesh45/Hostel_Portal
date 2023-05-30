<?php
session_start();
include('../connect.php');
$k = $_POST['staffname'];
$b = $_POST['work'];
$c = $_POST['doj'];
$e = $_POST['mobile'];
$f = $_POST['address'];

// query




  //do your write to the database filename and other details   
$sql = "INSERT INTO staff (staffname,work,doj,mobile,address) VALUES (:k,:b,:c,:e,:f)";
$q = $db->prepare($sql);
$q->execute(array(':k'=>$k,':b'=>$b,':c'=>$c,':e'=>$e,':f'=>$f));


header("location: staff.php");

	
?>