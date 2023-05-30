<?php
	include('../connect.php');
	$usn=$_GET['id'];
	$result = $db->prepare("DELETE FROM sleave WHERE usn= :leaveid");
	$result->bindParam(':leaveid', $usn);
	$result->execute();
	
	header ("location: leave.php");
?>