<?php
include 'db.php';

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Encrypt password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (username, email, password)
        VALUES ('$username', '$email', '$hashed_password')";

if(mysqli_query($conn, $sql)){
    echo "Registration Successful!";
    header("Location: login.html");
}
else{
    echo "Error: " . mysqli_error($conn);
}
?>