<?php
include 'auth.php';
include 'db.php';

$id = $_GET['id'];

$sql = "DELETE FROM vendors WHERE vendor_id=$id";

if(mysqli_query($conn,$sql)){
    header("Location: vendor_report.php");
}
else{
    echo "Error deleting vendor";
}
?>