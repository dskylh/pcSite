<?php
// hata yakalama
function emptyInputRegister($name, $email, $username, $password, $password_rpt){
    $result;
    if (empty($name) || empty($email) || empty($username) || empty($password) || empty($password_rpt)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function invalidUid($username){
    $result;
    if (!preg_match("/[^a-zA-Z0-9]*$/", $username)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function invalidEmail($email){
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}


function passwordMatch($password, $password_rpt){
    $result;
    if ($password !== $password_rpt){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

// kullanici adi veya emailin database'de var olup olmadigini kontrol eder

function uidExist($conn, $username, $email){
    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("Location: ../register.php?error=sqlerror");
        exit();
    }
    
    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if ($row = mysqli_fetch_assoc($result)){
        return $row;
    }
    else{
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);

}


function createUser($conn, $name, $email, $username, $password){
    $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("Location: ../register.php?error=sqlerror");
        exit();
    }
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedPassword);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("Location: ../register.php?error=none");
}


function emptyInputLogin($username, $password){
    $result;
    if (empty($username) || empty($password)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function loginUser($conn, $username, $password){
    $uidExist = uidExist($conn, $username, $username);
    if ($uidExist === FALSE){
        header("Location: ../login.php?error=wronglogin");
        exit();
    }
    $passwordHashed = $uidExist["usersPwd"];
    $checkPassword = password_verify($password, $passwordHashed);

    if($checkPassword === FALSE) {
        header("Location: ../login.php?error=wronglogin");
        exit();
    }
    else if ($checkPassword === TRUE){
        session_start();
        $_SESSION["userId"] = $uidExist["usersId"];
        $_SESSION["userUid"] = $uidExist["usersUid"];
        $_SESSION["userName"] = $uidExist["usersName"];
        $_SESSION["userEmail"] = $uidExist["usersEmail"];
        header("Location: ../index.php?login=success");
        exit();
    }

}