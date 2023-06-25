<?php
session_start();
include('../connect.php');
$k = $_POST['name'];
$b = $_POST['number'];
$c = $_POST['username'];
$d = $_POST['password'];
$h = $_POST['file'];


$file_name  = strtolower($_FILES['file']['name']);
$file_ext = substr($file_name, strrpos($file_name, '.'));
$prefix = 'your_site_name_'.md5(time()*rand(1, 9999));
$file_name_new = $prefix.$file_ext;
$path = '../uploads/'.$file_name_new;


    
    if(@move_uploaded_file($_FILES['file']['tmp_name'], $path)) {

$sql = "INSERT INTO user (name,number,username,password,file) VALUES (:k,:b,:c,:d,:h)";
$q = $db->prepare($sql);
$q->execute(array(':k'=>$k,':b'=>$b,':c'=>$c,':d'=>$d,':h'=>$file_name_new));
header("location: userview.php");

	}
?>