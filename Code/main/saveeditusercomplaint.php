<?php
include('../connect.php');

$id = $_POST['usn'];
$a = $_POST['sname'];
$b = $_POST['mobile'];
$c = $_POST['floor'];
$d = $_POST['room'];
$e = $_POST['cfor'];
$f = $_POST['details'];


$sql = "UPDATE scomplaint 
        SET sname=?,mobile=?,floor=?,room=?,cfor=?,details=?
		WHERE usn=?";
$q = $db->prepare($sql);
$q->execute(array($a,$b,$c,$d,$e,$f,$id));
header("location: usercomplaint.php");

?>
