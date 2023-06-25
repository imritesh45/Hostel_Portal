<?php
include('../connect.php');

$id = $_POST['memi'];
$a = $_POST['name'];
$h = $_POST['number'];
$b = $_POST['username'];
$c = $_POST['password'];

$sql = "UPDATE user 
        SET name=?,number=?,username=?,password=?
		WHERE id=?";
$q = $db->prepare($sql);
$q->execute(array($a,$h,$b,$c,$id));
header("location: userview.php");

?>