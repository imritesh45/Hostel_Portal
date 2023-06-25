<?php
    
    session_start();
    
    
    $errmsg_arr = array();
    
    
    $errflag = false;
    
    
    $link = mysqli_connect('localhost', 'root', '', 'model');
    if (!$link) {
        die('Failed to connect to server: ' . mysqli_connect_error());
    }
    
    function clean($conn, $str)
    {
        $str = trim($str);
        if (get_magic_quotes_gpc()) {
            $str = stripslashes($str);
        }
        return mysqli_real_escape_string($conn, $str);
    }
    
    $login = clean($link, $_POST['username']);
    $password = clean($link, $_POST['password']);
    
    if ($login == '') {
        $errmsg_arr[] = 'Username missing';
        $errflag = true;
    }
    if ($password == '') {
        $errmsg_arr[] = 'Password missing';
        $errflag = true;
    }
    
    if ($errflag) {
        $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
        session_write_close();
        header("location: index.php");
        exit();
    }
    
    $qry = "SELECT * FROM admin WHERE username='$login' AND password='$password'";
    $result = mysqli_query($link, $qry);
    
    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            session_regenerate_id();
            $member = mysqli_fetch_assoc($result);
            $_SESSION['SESS_MEMBER_ID'] = $member['id'];
            $_SESSION['SESS_FIRST_NAME'] = $member['name'];
            $_SESSION['SESS_LAST_NAME'] = $member['name'];
            session_write_close();
            header("location: main/index.php");
            exit();
        } else {
            echo "<script>alert('Invalid Details. Click OK Try Again');
                window.location.href='index.php'</script>";
            exit();
        }
    } else {
        die("Query failed");
    }
?>
