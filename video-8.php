<?php 


# Add Custom Fonts
# fonts Link:  https://www.dafont.com/
# Convert Font : http://www.fpdf.org/makefont/

require('./fpdf/fpdf.php');
$pdf = new FPDF();


$pdf->AddPage();


$pdf->AddFont("MaulidaMaya","","Maulidamaya.php");


$pdf->SetFont('MaulidaMaya','',35);

$pdf->Cell(0,5,'How to add custom fonts');

$pdf->Output();



?>