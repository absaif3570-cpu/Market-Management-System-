<?php
include 'auth.php';
include 'db.php';

$name = $_POST['name'];
$phone = $_POST['phone'];
$shop_name = $_POST['shop_name'];

$sql = "INSERT INTO vendors (name,phone,shop_name)
VALUES ('$name','$phone','$shop_name')";

if(mysqli_query($conn,$sql)){
    echo "Vendor Added Successfully";
}
else{
    echo "Error: " . mysqli_error($conn);
}
?>
