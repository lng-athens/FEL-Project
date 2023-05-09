<?php

$servername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "cookies_by_cha";

$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
    die('Connection failed: '.mysqli_connect_error());
}