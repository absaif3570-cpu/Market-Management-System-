<?php
include 'auth.php';
include 'db.php';

$vendor_id = $_POST['vendor_id'];
$amount = $_POST['amount'];
$method = $_POST['payment_method'];
$date = $_POST['payment_date'];

$sql = "INSERT INTO payments
(vendor_id,amount,payment_method,payment_date)
VALUES
('$vendor_id','$amount','$method','$date')";

if(mysqli_query($conn,$sql)){
    echo "Payment Recorded Successfully";
}
else{
    echo "Error: ".mysqli_error($conn);
}
?>