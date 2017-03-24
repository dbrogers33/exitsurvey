<?php
require 'connection/connection.php';
require 'fpdf/fpdf.php';
$result = $conn->query("SELECT * FROM exitsuvery_answers");
$header = $conn->query("SELECT `COLUMN_NAME` 
FROM `INFORMATION_SCHEMA`.`COLUMNS` 
WHERE `TABLE_SCHEMA`='exitsuvery_answers' 
    AND `TABLE_NAME`='exitsuvery_answers'");

$pdf = new FPDF();
$pdf->AddPage();
#$pdf->SetFont('Arial','B',12);		
foreach($header as $heading) {
	foreach($heading as $column_heading)
		$pdf->Cell(90,12,$column_heading,1);
}
foreach($result as $row) {
	#$pdf->SetFont('Arial','',12);	
	$pdf->Ln();
	foreach($row as $column)
		$pdf->Cell(90,12,$column,1);
}
$pdf->Output();
?>
