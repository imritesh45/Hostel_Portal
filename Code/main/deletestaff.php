<?php
	include('../connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("DELETE FROM staff WHERE id= :staffid");
	$result->bindParam(':staffid', $id);
	$result->execute();
	header ("location: staff.php");
?>