<?php
require_once 'dbh.inc.php';
//Code changed time: 1:01:44
function emptyInputSignUp($name, $email, $userNm, $pass, $passRp) {
    
    if (empty($name)) {
        return true;
    }

    else if (empty($email)) {
        return true;
    }

    else if (empty($userNm)) {
        return true;
    }

    else if (empty($pass)) {
        return true;
    }

    else if (empty($passRp)) {
        return true;
    }

    else {
        return false;
    }
}

function invalidUid($userNm) {
    
    if (!preg_match("/^[a-zA-Z0-9]*$/", $userNm)) {
        return true;
    }

    else {
        return false;
    }
}

function invalidEmail($email) {
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    }

    else {
        return false;
    }
}

function passSame($pass, $passRp) {
    
    if ($pass !== $passRp) {
        return true;
    }

    else {
        return false;
    }
}   
 
function userNmExists($conn, $userNm, $email) {
    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn); //security feature that runs user input info beside the stmt (statment) without changing the database - we want to check if username already exists before adding it

    
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    //now pass data to user
    mysqli_stmt_bind_param($stmt, "ss", $userNm, $email); //the 2 's' represents how many strings are inputted (these are userNm and email)
    mysqli_stmt_execute($stmt); //executes statment (stmt)

    $fetchData = mysqli_stmt_get_result($stmt); //Recieves the updated database?

    if ($row = mysqli_fetch_assoc($fetchData)) { //Checks if username and email sent to database exists
        return $row;
    }

    else {
        return false;
    }

    mysqli_stmt_close($stmt);
}   

function createAccount($conn, $name, $email, $userNm, $pass) {
    $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd) VALUES (?, ?, ?, ?);"; //value empty for now
    $stmt = mysqli_stmt_init($conn); //security feature that runs user input info beside the stmt (statment) without changing the database - we want to check if username already exists before adding it

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($pass, PASSWORD_DEFAULT);
    //now pass data to user
    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $userNm, $hashedPwd); //the 2 's' represents how many strings are inputted (these are userNm and email)
    mysqli_stmt_execute($stmt); //executes statment (stmt)
    mysqli_stmt_close($stmt);

    header("location: ../signup.php?error=none");
    exit();
}   

function emptyInputLogin($userNm, $pass) {

    if (empty($userNm)) {
        return true;
    }

    else if (empty($pass)) {
        return true;
    }

    else {
        return false;
    }
}

function loginUser($conn, $userNm, $pass) {
    $uidExists = userNmExists($conn, $userNm, $userNm);

    if ($uidExists === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    }

    $passHashed = $uidExists["usersPwd"];
    $checkPass = password_verify($pass, $passHashed);

    if ($checkPass === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    }

    else if ($checkPass === true) {
        session_start();
        $_SESSION["userid"] = $uidExists["usersId"]; //session is super global variables
        $_SESSION["useruid"] = $uidExists["usersUid"];
        header("location: ../loggedIn/home.php");
        exit();
    }
}