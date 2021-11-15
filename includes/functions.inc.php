<?php
    function emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) {
        $result;
        if(empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat)) {
            //empty is a built in funciton that checks if there is data inside function. Returns true or false.
            $result = true;
        }
        else {
            $result = false;
        }
        return $result;
    };

    function invalidUid($username) {
        $result;

        if(!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
            //regex search for valid username
            $result = true;
        }
        else {
            $result = false;
        }
        return $result;
    };

    function invalidEmail($email) {
        $result;

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            //filters if is an email. If false result = true.
            $result = true;
        }
        else {
            $result = false;
        }
        return $result;
    };

    function pwdMatch($pwd, $pwdRepeat) {
        $result;

        if($pwd !== $pwdRepeat) {
            $result = true;
        }
        else {
            $result = false;
        }
        return $result;
    };

    function uidExists($conn, $username, $email) {
        $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
        $stmt = mysqli_stmt_init($conn);//statement for sql connection

        if(!mysqli_stmt_prepare($stmt, $sql)) {
            //checks if can connect to the database
            header("location: ../signup.php?error=stmtfailed");
            exit();
        }

        mysqli_stmt_bind_param($stmt, "ss", $username, $email);//ss stansd for 2 string being passed in. If 3 strings "sss". Binds paramaters to statement.
        mysqli_stmt_execute($stmt);

        $resultData = mysqli_stmt_get_result($stmt);//Gets result of sql statement

        if($row = mysqli_fetch_assoc($resultData)) {
            //fetches result data from a specific column in sql. If can get then returns true.
            return $row;//returning all data from database if user exists.
        }
        else {
            $result = false;
            return $result;
        }

        mysqli_stmt_close($stmt);//closes off sql statement
    };

    function createUser($conn, $name, $email, $username, $pwd) {
        $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd) VALUES (?, ?, ?, ?);";
        $stmt = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../signup.php?error=stmtfailed");
            exit();
        }

        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);//hashes password before going into database

        mysqli_stmt_bind_param($stmt, "ssss",  $name, $email, $username, $hashedPwd);//4 strings
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("location: ../signup.php?error=none");
        exit();
    };
