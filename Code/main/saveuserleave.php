<?php
session_start();
include('../connect.php');
$a = $_POST['sname'];
$k = $_POST['usn'];
$b = $_POST['mobile'];
$c = $_POST['floor'];
$d = $_POST['room'];
$e = $_POST['departuredate'];
$f = $_POST['arrivaldate'];
$g = $_POST['place'];
$h = $_POST['reason'];
// query


  //do your write to the database filename and other details   
$sql = "INSERT INTO sleave (sname,usn,mobile,floor,room,departuredate,arrivaldate,place,reason) VALUES (:a,:k,:b,:c,:d,:e,:f,:g,:h)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':k'=>$k,':b'=>$b,':c'=>$c,':d'=>$d,':e'=>$e,':f'=>$f,':g'=>$g,':h'=>$h));
header("location: userleave.php");
	
?>