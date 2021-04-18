


<?php 

 include './fpdf/fpdf.php';
 include './fpdf/table/exfpdf.php';
 include './fpdf/table/easyTable.php';


$pdf = new exFPDF();
$pdf->AddPage();


$pdf->SetFont("Arial","",20);

$table=new easyTable($pdf, '{100, 300, 100}', 'width:500;border:1');

$table->easyCell('Name', 'valign:T'); 

$table->easyCell('Email', 'bgcolor:#b3ccff;');
$table->easyCell('Phone');

$table->printRow();



$table->rowStyle('min-height:20; align:{L}'); 

$table->easyCell('Text 4', 'colspan:3');
$table->printRow();





$table->endTable(1);




$pdf->Output();














?>