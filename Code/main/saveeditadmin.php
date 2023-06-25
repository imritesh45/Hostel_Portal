<?php

include('../connect.php');

$id = $_POST['id'];
$a = $_POST['name'];
$h = $_POST['email'];
$b = $_POST['username'];
$c = $_POST['password'];

$sql = "UPDATE admin 
        SET name=?,email=?,username=?,password=?
		WHERE id=?";
$q = $db->prepare($sql);
$q->execute(array($a,$h,$b,$c,$id));
header("location: admin.php");

?>