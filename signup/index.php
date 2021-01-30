<?php

    @include('../assets/php/requests/signed.php');
    if($signed) header('Location: ../');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php @include('../assets/php/heads/connect_head.php');?>
    <title>Tell-Me • Signup</title>
</head>
<body>

    <div class="row fixed-top w-100 h-100 bg-dark y-scroll m-0 p-0" id="page">
        <div class="d-none d-md-flex justify-content-center align-items-center flex-column col-7 bg-transparent m-0">
            <h1 class="text-light mb-0 font-weight-bold mb-0">Welcome</h1>
            <div id="tcl" class="rounded p-3 shadow mt-2">
                <hr class="mt-0" id="hr1">
                <a href="http://www.tellme.rf.gd/" class="nav-link d-inline-flex btn btn-dark rounded border-none mr-1">Old Version</a>
                <a href="../about" class="nav-link d-inline-flex btn btn-dark rounded border-none mr-1">About</a>
                <a href="../help" class="nav-link d-inline-flex btn btn-dark rounded border-none mr-1">Help</a>
                <a href="../login" class="nav-link d-inline-flex btn btn-dark rounded border-none">Login</a>
            </div>
        </div>
        <form class="bg-white col-10 col-md-4 col-lg-3 mx-auto my-auto shadow p-3 rounded tcf" id="signup">
            <center>
                <img class="rounded-circle mb-3" id="tci" src="../assets/images/ico.png" alt="Tell-Me Logo">
            </center>
            <h2 class="text-center curl mb-2">Tell-Me</h2>
            <p class="alert alert-dark text-center p-1" id="res">Create an account</p>
            <div class="input-group my-2">
                <label class="d-block w-100 mb-0 font-weight-bold" for="fullname">Your Name</label>
                <input type="text" class="form-control" id="fullname" required>
            </div>
            <div class="input-group">
                <label class="d-block w-100 mb-0 font-weight-bold" for="username">Create Username</label>
                <input type="text" class="form-control" id="username" required>
            </div>
            <div class="input-group my-2">
                <label class="d-block w-100 mb-0 font-weight-bold" for="password">Set Password</label>
                <input type="password" class="form-control" id="password" required>
            </div>
            <input class="btn btn-block w-100 btn-success mt-3" type="submit" value="Sign Up">
            <hr>
            <a class="btn btn-outline-success w-100 mb-1" href="../login">Login to Account</a>
            <p class="d-block text-center curl mb-0 mt-3">&copy; Copyright Anthony Saah</p>
        </form>
    </div>

    <script src="../assets/js/connect.js"></script>
    
</body>
</html>