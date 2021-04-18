<?php 


# Drawing
# pie chart Image


require("./fpdf/fpdf.php");

$pdf = new FPDF;

$pdf->AddPage();

$pdf->SetFont("Arial","",16);	



$pdf->SetLineWidth(2);

$pdf->SetFillColor(255,0,0);

$pdf->SetDrawColor(0,255,0);

$pdf->Rect(100,10,15,15,'DF');

$pdf->ln();


$pdf->Image('http://chart.googleapis.com/chart?cht=p3&chd=t:40,40,20&chs=250x200&chl=Par-1|Part-2|part-3',60,30,90,0,'PNG');

// $pdf->Image('http://chart.googleapis.com/chart?cht=p3&chd=t:40,40,20&chs=250x100&chl=Par-1|Part-2|part-3',60,30,90,0,'PNG');

$pdf->Output();


?>