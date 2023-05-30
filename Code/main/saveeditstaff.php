<?php
// configuration
include('../connect.php');

// new data

$id = $_POST['id'];
$a = $_POST['staffname'];
$b = $_POST['work'];
$c = $_POST['doj'];
$d = $_POST['mobile'];
$e = $_POST['address'];

// query

$sql = "UPDATE staff 
        SET staffname=?,work=?,doj=?, mobile=?, address=?
		WHERE id=?";
$q = $db->prepare($sql);
$q->execute(array($a,$b,$c,$d,$e,$id));
header("location: staff.php");

?>