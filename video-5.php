


<?php 
require("./fpdf/fpdf.php");

$pdf = new FPDF;
$pdf->AddPage();

$pdf->SetFont("Arial","BI",16);
$pdf->Cell(0,10,"Users Data:",'B',1);

$pdf->Ln();

$pdf->SetFont("Arial","B",16);
$pdf->Cell(50,10,"Name",1,0,'C');
$pdf->Cell(70,10,"Email",1,0,'C');
$pdf->Cell(50,10,"Phone",1,0,'C');
$pdf->Cell(20,10,"Age",1,0,'C');


$user = [
	"user-name-1",
	"user-name-1@gmail.com",
	"0129019212",
	"30"
];

make_row($pdf,$user);
make_row($pdf,$user);
make_row($pdf,$user);
make_row($pdf,$user);
make_row($pdf,$user);

$pdf->Output();




function make_row($pdf,$user){

	$name 	= $user[0];
	$email  = $user[1];
	$phone  = $user[2];
	$age    = $user[3];

	$pdf->Ln(10);

	$pdf->SetFont("Arial","",11);
	$pdf->Cell(50,10,$name,1,0,'C');
	$pdf->Cell(70,10,$email,1,0,'C');
	$pdf->Cell(50,10,$phone,1,0,'C');
	$pdf->Cell(20,10,$age,1,0,'C');


}













?>