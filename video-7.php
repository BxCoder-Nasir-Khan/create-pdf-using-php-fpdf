<?php 

#table form db



	$db_connection =  mysqli_connect(
		"localhost",
		"root",
		"",
		"db_to_pdf"
	);
	
	$query = "SELECT name,email,phone,age from users";

	$users = mysqli_query($db_connection,$query);


	



	require("./fpdf/fpdf.php");

	$pdf = new FPDF;

	$pdf->AddPage();

	$pdf->SetFont("Arial","BI",20);
	$pdf->Cell(0,10,"Users Data:",'B',1);


	$pdf->Ln(5);
	$pdf->SetFont("Arial","B",16);
	$pdf->Cell(50,10,"Name",1,0,'C');
	$pdf->Cell(70,10,"Email",1,0,'C');
	$pdf->Cell(50,10,"Phone",1,0,'C');
	$pdf->Cell(20,10,"Age",1,0,'C');

	
	$pdf->SetFont("Arial","",12);
	
	while ($user = mysqli_fetch_array($users)) {

		$pdf->Ln(10);
		$pdf->Cell(50,10,$user[0],1,0,'C');
		$pdf->Cell(70,10,$user[1],1,0,'C');
		$pdf->Cell(50,10,$user[2],1,0,'C');
		$pdf->Cell(20,10,$user[3],1,0,'C');
	}

	$pdf->Output("user-data.pdf","D");












?>