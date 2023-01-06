<?php

if (isset($_POST["submit"])) {
    $name = $_POST["name"]; //Grab the information in textbox name by calling the actual name of the textbox which in this case is name
    $email = $_POST["email"];
    $userNm = $_POST["userNm"];
    $pass = $_POST["pass"];
    $passRp = $_POST["passRp"];

    include("dbh.inc.php");
    include("functions.inc.php");
    
    if (emptyInputSignUp($name, $email, $userNm, $pass, $passRp) !== false) {
        header("location: ../signup.php?error=emptyinput");
        exit();
    }

    if (invalidUid($userNm) !== false) {
        header("location: ../signup.php?error=invaliduid");
        exit();
    }

    if (invalidEmail($email) !== false) {
        header("location: ../signup.php?error=invalidemail");
        exit();
        }

    if (passSame($pass, $passRp) !== false) {
        header("location: ../signup.php?error=passwordsdontmatch");
        exit();
    }

    if (userNmExists($conn, $userNm, $email) !== false) { //$conn gives us access to the data of usernames
        header("location: ../signup.php?error=usernametaken");
        exit();
    }

    createAccount($conn, $name, $email, $userNm, $pass); 
}

if (isset($_POST["submit2"])) {
    header("location: ../login.php");
}

else {
    header("location: ../signup.php");
    exit();
}