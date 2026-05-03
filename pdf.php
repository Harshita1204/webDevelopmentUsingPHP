<?php

require('../fpdf/fpdf186/fpdf.php'); // adjust path if needed

$pdf = new FPDF();
$pdf->AddPage();

// Title
$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,10,'Harshitapreet kaur',0,1,'C');

$pdf->Ln(5);

// Set pink color (RGB)
$pdf->SetFillColor(255,182,193); // light pink

// Header
$pdf->SetFont('Arial','B',12);
$pdf->Cell(60,10,'Name',1,0,'C',true);
$pdf->Cell(40,10,'Age',1,0,'C',true);
$pdf->Cell(60,10,'City',1,1,'C',true);

// Data
$pdf->SetFont('Arial','',12);
$data = [
    ['Harshu', '22', 'Delhi'],
    ['Rinku', '25', 'Mumbai'],
    ['Aman', '23', 'Chandigarh']
];

foreach($data as $row){
    $pdf->Cell(60,10,$row[0],1,0,'C',true);
    $pdf->Cell(40,10,$row[1],1,0,'C',true);
    $pdf->Cell(60,10,$row[2],1,1,'C',true);
}

$pdf->Output();

?>
