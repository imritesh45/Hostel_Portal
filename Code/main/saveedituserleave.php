<?php

include('../connect.php');


$id = $_POST['usn'];
$a = $_POST['sname'];
$b = $_POST['mobile'];
$c = $_POST['floor'];
$d = $_POST['room'];
$e = $_POST['departuredate'];
$f = $_POST['arrivaldate'];
$g = $_POST['place'];
$h = $_POST['reason'];


$sql = "UPDATE sleave 
        SET sname=?,mobile=?,floor=?,room=?,departuredate=?,arrivaldate=?,place=?,reason=?
		WHERE usn=?";
$q = $db->prepare($sql);
$q->execute(array($a,$b,$c,$d,$e,$f,$g,$h,$id));
header("location: userleave.php");

?>
