<?php

include('../connect.php');


$id = $_POST['day'];
$a = $_POST['breakfast'];
$h = $_POST['lunch'];
$b = $_POST['dinner'];

$sql = "UPDATE mess 
        SET breakfast=?,lunch=?,dinner=?
		WHERE day=?";
$q = $db->prepare($sql);
$q->execute(array($a,$h,$b,$id));
header("location: mess.php");

?>