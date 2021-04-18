<?php 
	// header Add
	// Footer Add

require("./fpdf/fpdf.php");


class OurPDF extends FPDF
{
	
	function Header(){
		$this->SetFont("Arial","B",30);

		$image_file = "./image/my-image.jpg";

		$this->Image($image_file,10,10,20,0);


		$this->Cell(0,10,"This is Title",0,1,'C');
		$this->SetFont("Arial","B",15);
		$this->Cell(0,10,"This is Sub Title",'B',0,'C');
	}

	function Footer()
	{
		$this->SetY(-15);

		$this->SetFont("Arial","B",14);
		$this->Cell(0,7,"CopyRight@2021",0,1,'C');

		$this->SetFont("Arial","I",9);
		$this->Cell(0,7,"Page ".$this->PageNo()."/{nb}",0,1,'C');
		
	}
}





$pdf = new OurPDF;

$pdf->AliasNbPages();

$pdf->AddPage();

$pdf->AddPage();


$pdf->AddPage();

$pdf->AddPage();

$pdf->AddPage();

$pdf->AddPage();


$pdf->AddPage();

$pdf->AddPage();

$pdf->AddPage();

$pdf->Output();


?>