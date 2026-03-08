<?php
include 'auth.php';
include 'db.php';

$search = $_GET['search'] ?? '';
?>

<form method="GET">
    <input type="text" name="search" placeholder="Search Vendor">
    <button type="submit">Search</button>
</form>

<table border="1">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Phone</th>
</tr>

<?php
$sql = "SELECT * FROM vendors 
        WHERE name LIKE '%$search%'";

$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)){
?>
<tr>
    <td><?php echo $row['vendor_id']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['phone']; ?></td>
</tr>
<?php } ?>
</table>