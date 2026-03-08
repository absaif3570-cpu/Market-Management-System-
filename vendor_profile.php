<?php
include 'db.php';

$id = $_GET['id'];

$sql = "SELECT * FROM vendors WHERE vendor_id = $id";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
<title>Vendor Profile</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="form-box">

<h2>Vendor Profile</h2>

<p><strong>Name:</strong> <?php echo $row['name']; ?></p>
<p><strong>Phone:</strong> <?php echo $row['phone']; ?></p>
<p><strong>Shop Name:</strong> <?php echo $row['shop_name']; ?></p>

</div>

</body>
</html>