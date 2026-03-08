<?php
include 'auth.php';
include 'db.php';

$shop_name = $_POST['shop_name'];
$owner_name = $_POST['owner_name'];
$location = $_POST['location'];
$rent = $_POST['rent'];

$sql = "INSERT INTO shops (shop_name,owner_name,location,rent)
VALUES ('$shop_name','$owner_name','$location','$rent')";

if(mysqli_query($conn,$sql)){
    echo "Shop Added Successfully";
}
else{
    echo "Error: ".mysqli_error($conn);
}
?>