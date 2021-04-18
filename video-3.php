<?php 


	// Add image
	
	
	require("./fpdf/fpdf.php");



	$pdf = new FPDF;

	$pdf->AddPage();

	$pdf->SetFont("Arial","B",14);
	// $pdf->Cell(0,10,"Add image");

	$image_file = "./image/my-image.jpg";

	$pdf->Image($image_file,0,0,50,0);

	$pdf->Output();

?>