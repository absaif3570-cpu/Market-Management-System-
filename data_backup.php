<?php
include 'db.php';

header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=vendors.xls");

$result = mysqli_query($conn,"SELECT * FROM vendors");

while($row = mysqli_fetch_assoc($result)){
    echo implode("\t",$row)."\n";
}
?>