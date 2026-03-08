<?php
include 'db.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Rent Record</title>
</head>
<body>

<h2 style="text-align:center;">Rent Record</h2>

<table border="1" width="90%" align="center">
<tr>
    <th>Vendor</th>
    <th>Shop</th>
    <th>Monthly Rent</th>
    <th>Total Paid</th>
    <th>Due</th>
</tr>

<?php
$sql = "SELECT vendors.vendor_id, vendors.name, vendors.shop_name, shops.rent
        FROM vendors
        JOIN shops ON vendors.shop_name = shops.shop_name";

$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)){

    $vendor_id = $row['vendor_id'];

    $payment_sql = "SELECT SUM(amount) AS total_paid 
                    FROM payments 
                    WHERE vendor_id = $vendor_id";

    $payment_result = mysqli_query($conn, $payment_sql);
    $payment_data = mysqli_fetch_assoc($payment_result);

    $total_paid = $payment_data['total_paid'] ?? 0;
    $due = $row['rent'] - $total_paid;
?>

<tr>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['shop_name']; ?></td>
    <td><?php echo $row['rent']; ?></td>
    <td><?php echo $total_paid; ?></td>
    <td><?php echo $due; ?></td>
</tr>

<?php } ?>

</table>

</body>
</html>