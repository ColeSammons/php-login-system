<?php
    //if brought to this page by the submit from signup.php
    if(isset($_POST["submit"])) {
        $name = $_POST["name"];//taken from name of input
        $email = $_POST["email"];
        $username = $_POST["username"];
        $pwd = $_POST["pwd"];
        $pwdRepeat = $_POST["pwdRepeat"];

        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';

        if(emptyInputSignup() !== false) {
            header("location: ../signup.php?error=emptyinput");
            exit();//stops script from running
        }
    }
    else {
        header("location: ../signup.php");//redirects to that page
        exit();
    }
?>