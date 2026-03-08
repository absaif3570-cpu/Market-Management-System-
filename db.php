<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "market_db";

$conn = mysqli_connect($host, $user, $password, $db);

if(!$conn){
    die("Database connection failed");
}
?>