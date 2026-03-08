<?php
include 'db.php';

// Total Vendors
$vendor_query = "SELECT COUNT(*) AS total_vendors FROM vendors";
$vendor_result = mysqli_query($conn, $vendor_query);
$vendor_data = mysqli_fetch_assoc($vendor_result);

// Total Shops
$shop_query = "SELECT COUNT(*) AS total_shops FROM shops";
$shop_result = mysqli_query($conn, $shop_query);
$shop_data = mysqli_fetch_assoc($shop_result);

// Total Rent
$rent_query = "SELECT SUM(rent) AS total_rent FROM shops";
$rent_result = mysqli_query($conn, $rent_query);
$rent_data = mysqli_fetch_assoc($rent_result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Report</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2 style="text-align:center;">Market Report Summary</h2>

<div class="report-box">
    <p><strong>Total Vendors:</strong> <?php echo $vendor_data['total_vendors']; ?></p>
    <p><strong>Total Shops:</strong> <?php echo $shop_data['total_shops']; ?></p>
    <p><strong>Total Monthly Rent:</strong> <?php echo $rent_data['total_rent']; ?> TK</p>
</div>

</body>
</html>