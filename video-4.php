<?php 

#MultiCell
#Write
#SetMargin
#SetLeftMargin	
#SetRightMargin	
#SetTopMargin	
#MarginBottom

require("./fpdf/fpdf.php");

$pdf = new FPDF;


$pdf->SetAutoPageBreak(true,200);

$pdf->AddPage();

$pdf->SetFont("Arial","",16);



$pdf->SetFillColor(255,0,0);

$pdf->MultiCell(100,5,"This method allows printing text with line breaks. They can be automatic (as soon as the text reaches the right border of the cell) or explicit (via the character). As many cells as necessary are output, one below the other.Text can be aligned, centered or justified. The cell block can be framed and the background painted",1,'C',true);


$pdf->Ln(10);




$pdf->Write(5,"This method allows printing text with line breaks. They can be automatic (as soon as the text reaches the right border of the cell) or explicit (via the character). As many cells as necessary are output, one below the other.Text can be aligned, centered or justified. The cell block can be framed and the background painted (as soon as the text reaches the right border of the cell) or explicit (via the character). As many cells as necessary are output, one below the other.Text can be aligned, centered or justified. The cell block can be framed and the background painted(as soon as the text reaches the right border of the cell) or explicit (via the character). As many cells as necessary are output, one below the other.Text can be aligned, centered or justified. The cell block can be framed and the background painted");






// $pdf->Cell(100,5,"this is text");
$pdf->Output();


?>
