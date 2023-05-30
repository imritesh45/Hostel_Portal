<?php
	include('../connect.php');
	$usn=$_GET['id'];
	$result = $db->prepare("DELETE FROM scomplaint WHERE usn= :complaintid");
	$result->bindParam(':complaintid', $usn);
	$result->execute();
	
	header ("location: complaint.php");
?>