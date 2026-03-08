<?php
include 'auth.php';
include 'db.php';

$id = $_GET['id'];

$sql = "DELETE FROM shops WHERE shop_id=$id";

if(mysqli_query($conn,$sql)){
    header("Location: manage_shop.php");
}
else{
    echo "Error deleting shop";
}
?>