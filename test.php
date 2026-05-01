<?php

require('../fpdf/fpdf186/fpdf.php'); // adjust if needed

$pdf = new FPDF();
$pdf->AddPage();

$pdf->SetFont('Arial','B',16);

$pdf->Cell(0,0,'Hello World!',0,1,'C');

$pdf->Output();

?>