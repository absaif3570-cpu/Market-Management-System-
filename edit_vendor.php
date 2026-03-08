<?php
include 'auth.php';
include 'db.php';

$id = $_GET['id'];

if(isset($_POST['update'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];

    $sql = "UPDATE vendors 
            SET name='$name', phone='$phone' 
            WHERE vendor_id=$id";

    mysqli_query($conn,$sql);
    header("Location: manage_vendors.php");
}

$result = mysqli_query($conn,"SELECT * FROM vendors WHERE vendor_id=$id");
$row = mysqli_fetch_assoc($result);
?>

<form method="POST">
    <input type="text" name="name" value="<?php echo $row['name']; ?>">
    <input type="text" name="phone" value="<?php echo $row['phone']; ?>">
    <button name="update">Update</button>
</form>