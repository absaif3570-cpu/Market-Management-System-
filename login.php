<?php
session_start();
include 'db.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) == 1){

    $row = mysqli_fetch_assoc($result);

    if(password_verify($password,$row['password'])){

        $_SESSION['username'] = $row['username'];

        if(isset($row['role']) && $row['role'] == 'admin'){
            header("Location: admin_dashboard.php");
        } else {
            header("Location: admin_dashboard.php"); 
        }

        exit();
    }
}

echo "Invalid Username or Password";
?>