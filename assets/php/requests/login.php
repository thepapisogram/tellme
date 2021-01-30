<?php

    @include ('../../../config/conn.php');
    @include ('../../../config/time.php');

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT username, password, code FROM users WHERE username = '$username'";
    $res = mysqli_query($conn, $sql);
    if(mysqli_num_rows($res) > 0){
        $user = mysqli_fetch_assoc($res);
        $user_pass = $user['password'];
        $user_code = $user['code'];
        if(password_verify($password, $user_pass)){
            setcookie('id', $user_code, time() + (86400 * 30), '/');
            echo 'success';
        }else echo 'incorrect';
    }else echo 'missing';

?>