<?php
include 'db.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Vendor Report</title>
</head>
<body>

<h2 style="text-align:center;">Vendor Report</h2>

<table border="1" width="80%" align="center">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Phone</th>
    <th>Shop Name</th>
</tr>

<?php
$sql = "SELECT * FROM vendors";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)){
?>
<tr>
    <td><?php echo $row['vendor_id']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['phone']; ?></td>
    <td><?php echo $row['shop_name']; ?></td>
</tr>
<?php } ?>

</table>

</body>
</html>