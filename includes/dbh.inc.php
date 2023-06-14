<?php

$hostName= "localhost";
$dbUserName = "root";
$dbPassword = "";
$dbName = "proje";

$conn = mysqli_connect($hostName, $dbUserName, $dbPassword, $dbName);

if (!$conn) {
    die("Bağlantı yapılamadı " . mysqli_connect_error());
}