<?php
include 'db.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manage Shops</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2 style="text-align:center;">Shop Records</h2>

<table border="1" width="90%" align="center">
<tr>
    <th>ID</th>
    <th>Shop Name</th>
    <th>Owner</th>
    <th>Location</th>
    <th>Rent</th>
    <th>Action</th>
</tr>

<?php
$sql = "SELECT * FROM shops";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)){
?>
<tr>
    <td><?php echo $row['shop_id']; ?></td>
    <td><?php echo $row['shop_name']; ?></td>
    <td><?php echo $row['owner_name']; ?></td>
    <td><?php echo $row['location']; ?></td>
    <td><?php echo $row['rent']; ?></td>
    <td>
        <a href="delete_shop.php?id=<?php echo $row['shop_id']; ?>"
           onclick="return confirm('Are you sure to delete this shop?')">
           Delete
        </a>
    </td>
</tr>
<?php } ?>

</table>

</body>
</html>