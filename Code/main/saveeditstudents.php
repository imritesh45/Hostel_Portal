<?php
include('../connect.php');

$id = $_POST['usn'];
$a = $_POST['sname'];
$b = $_POST['college'];
$c = $_POST['semester'];
$d = $_POST['branch'];
$e = $_POST['state'];
$f = $_POST['mobile'];

$sql = "UPDATE students 
        SET sname=?,college=?, semester=?, branch=?, state=?,mobile=?
		WHERE usn=?";
$q = $db->prepare($sql);
$q->execute(array($a,$b,$c,$d,$e,$f,$id));
header("location: students.php");
?>