<?php
	include('../connect.php');
	$usn=$_GET['id'];
	$result = $db->prepare("DELETE FROM students WHERE usn= :studentid");
	$result->bindParam(':studentid', $usn);
	$result->execute();
	
	header ("location: students.php");
?>