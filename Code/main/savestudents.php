<?php
session_start();
include('../connect.php');
$a = $_POST['sname'];
$k = $_POST['usn'];
$b = $_POST['college'];
$c = $_POST['semester'];
$d = $_POST['branch'];
$e = $_POST['state'];
$f = $_POST['mobile'];



$file_name  = strtolower($_FILES['file']['name']);
$file_ext = substr($file_name, strrpos($file_name, '.'));
$prefix = 'your_site_name_' . md5(time() * rand(1, 9999));
$file_name_new = $prefix . $file_ext;
$path = '../uploads/' . $file_name_new;



if (@move_uploaded_file($_FILES['file']['tmp_name'], $path)) {

  
  $sql = "INSERT INTO students (sname,usn,college,semester,branch,state,mobile,file) VALUES (:a,:k,:b,:c,:d,:e,:f,:h)";
  $q = $db->prepare($sql);
  $q->execute(array(':a' => $a, ':k' => $k, ':b' => $b, ':c' => $c, ':d' => $d, ':e' => $e, ':f' => $f, ':h' => $file_name_new));
  header("location: students.php");
}
