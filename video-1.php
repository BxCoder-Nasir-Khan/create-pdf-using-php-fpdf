<?php 



#FPDF
#-- New page
#-- Page Size
#-- Page Rotation
#-- Line width , height
#-- New Line
#-- Font style
#-- Font Size
#-- Font Color
#-- save file
#-- Download File


require('./fpdf/fpdf.php');


$pdf = new FPDF();


$pdf->AddPage();


$pdf->SetFont('Arial','B',30);

$text = "this is our text";

$pdf->Cell(100,10,$text,1,1,'R');

// $pdf->ln(10);

$pdf->SetFont('Arial','BI',30);
$pdf->Cell(40,10,'Line 2');




$pdf->AddPage("P","A5",0);

$pdf->SetFont('Arial','B',30);

$text = "This is page 2";


$pdf->SetTextColor(255,0,0);
$pdf->Cell(100,10,$text,1,1,'R');



$file_name = "./save/video-1.pdf";

$pdf->Output($file_name,"F");

$pdf->Output("video-1.pdf","D");


?>