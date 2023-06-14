<?php

if (isset($_POST["submit"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $password = $_POST["password"];
    $password_rpt = $_POST["password-rpt"];
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputRegister($name, $email, $username, $password, $password_rpt) !== false){
        header("Location: ../register.php?error=emptyInput");
        exit();
    }

    if (invalidUid($username) !== false){
        header("Location: ../register.php?error=invalidUid");
        exit();
    }

    if (invalidEmail($email) !== false){
        header("Location: ../register.php?error=invalidEmail");
        exit();
    }

    if (passwordMatch($password, $password_rpt) !== false){
        header("Location: ../register.php?error=pwdNotMatch");
        exit();
    }


    if (uidExist($conn, $username, $email) !== false){
        header("Location: ../register.php?error=usernameTaken");
        exit();
    }


    createUser($conn, $name, $email, $username, $password);


}
else{
    header("Location: ../register.php");
    exit();
}