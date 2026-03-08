<?php
require('fpdf/fpdf.php');
include 'db.php';

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);

$pdf->Cell(190,10,'Vendor Report',1,1,'C');

$pdf->SetFont('Arial','',12);

$sql = "SELECT * FROM vendors";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)){
    $pdf->Cell(40,10,$row['vendor_id'],1);
    $pdf->Cell(50,10,$row['name'],1);
    $pdf->Cell(50,10,$row['phone'],1);
    $pdf->Ln();
}

$pdf->Output();
?>