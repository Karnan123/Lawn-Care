<?php

if (isset($_POST["submit"])) {
    $userNm = $_POST["userNm"];
    $pass = $_POST["pass"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputLogin($userNm, $pass) !== false) {
        header("location: ../login.php?error=emptyinput");
        exit();
    }

    loginUser($conn, $userNm, $pass);
}

if (isset($_POST["submit2"])) {
    header("location: ../signup.php");
}

else {
    header("location: ../login.php");
    exit();
}