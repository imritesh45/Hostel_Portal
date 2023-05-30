<?php
	include('../connect.php');
	$day=$_GET['id'];
	$result = $db->prepare("DELETE FROM mess WHERE day= :messid");
	$result->bindParam(':messid', $day);
	$result->execute();
	header ("location: mess.php");
?>