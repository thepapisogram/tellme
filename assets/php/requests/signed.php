<?php

    @include('./config/conn.php');
    @include('../config/conn.php');
    
    $signed = false;
    if(isset($_COOKIE['id'])){
        $id = $_COOKIE['id'];

        $sql = "SELECT id FROM users WHERE code = '$id'";
        $res = mysqli_query($conn, $sql);
        if(mysqli_num_rows($res) > 0) $signed = true;

        mysqli_free_result($res);
        mysqli_close($conn);
    }

?>