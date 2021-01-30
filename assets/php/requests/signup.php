<?php

    @include ('../../../config/conn.php');
    @include ('../../../config/time.php');

    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $code = uniqid().abs(crc32(uniqid()));
    
    $in_fullname = mysqli_real_escape_string($conn, $fullname);
    $in_username = mysqli_real_escape_string($conn, $username);
    $in_password = password_hash($password, PASSWORD_BCRYPT);
    $in_code = mysqli_real_escape_string($conn, $code);
    $in_joinday =  mysqli_real_escape_string($conn, $day);
    $in_joindate =  mysqli_real_escape_string($conn, $date);
    $in_jointime =  mysqli_real_escape_string($conn, $time);

    
    $sql = "SELECT username FROM users WHERE username = '$in_username'";
    $res = mysqli_query($conn, $sql);
    if(mysqli_num_rows($res)>0) echo "exists";
    else{
        mysqli_free_result($res);
        $sql = "INSERT INTO users(fullname, username, password, code, join_day, join_date, join_time) VALUES('$in_fullname', '$in_username', '$in_password', '$in_code', '$in_joinday', '$in_joindate', '$in_jointime')";
        if(mysqli_query($conn, $sql)){
            setcookie('id', $code, time() + (86400 * 30), '/');
            echo 'success';
        }
        else echo 'error';
    }
    
?>