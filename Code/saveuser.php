<?php
session_start();
include('connect.php');

// Sanitize and validate user inputs
$k = htmlspecialchars($_POST['name']);
$b = htmlspecialchars($_POST['number']);
$c = htmlspecialchars($_POST['username']);
$d = htmlspecialchars($_POST['password']);

// File upload
$file_name = strtolower($_FILES['file']['name']);
$file_ext = substr($file_name, strrpos($file_name, '.'));
$prefix = 'your_site_name_' . md5(time() * rand(1, 9999));
$file_name_new = $prefix . $file_ext;
$path = 'uploads/' . $file_name_new;

// Check if the file uploaded successfully
if (move_uploaded_file($_FILES['file']['tmp_name'], $path)) {
    try {
        // Prepare and execute the SQL statement
        $sql = "INSERT INTO user (name, number, username, password, file) VALUES (?, ?, ?, ?, ?)";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(1, $k);
        $stmt->bindParam(2, $b);
        $stmt->bindParam(3, $c);
        $stmt->bindParam(4, $d);
        $stmt->bindParam(5, $file_name_new);
        $stmt->execute();

        header("location: user.php");
        exit();
    } catch (PDOException $e) {
        // Handle database error
        echo "Database error: " . $e->getMessage();
    }
} else {
    // Handle file upload error
    echo "File upload failed.";
}
?>
