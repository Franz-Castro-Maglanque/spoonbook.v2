<?php
include("session.php");
require('fpdf/fpdf.php');
include('config.php');
$query = $_SESSION['query'];
$pdf = new FPDF();
///var_dump(get_class_methods($pdf));

$pdf->AddPage();
$pdf->SetFont('Arial','',10);
$pdf->Cell(50,10,'Date:'.date('d-m-Y').'',0,"R");
$pdf->Ln(15);
$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,10,'Customers',1,1,"C");
$pdf->SetFont('Arial','B',12);
// $pdf->Cell(10,8,'No.',1);
$pdf->Cell(45,8,'First Name',1);
$pdf->Cell(45,8,'Middle Name',1);
$pdf->Cell(45,8,'Last Name',1);
$pdf->Cell(45,8,'Birth Date',1);
$pdf->Cell(45,8,'Username',1);
$pdf->Cell(45,8,'Password',1);
//$query="SELECT * FROM users";
$result = mysqli_query($mysqli, $query);
$no=0;
while($row = mysqli_fetch_array($result)){
	$no=$no+1;
	$pdf->Ln(8);
	$pdf->SetFont('Arial','',12);
	// $pdf->Cell(10,8,$no,1);
	$pdf->Cell(15,8,$row['firstname'],1);
	$pdf->Cell(45,8,$row['middlename'],1);
	$pdf->Cell(45,8,$row['lastname'],1);
	$pdf->Cell(45,8,$row['birthdate'],1);
	$pdf->Cell(45,8,$row['username'],1);
	$pdf->Cell(45,8,$row['password'],1);
}
$pdf->Output();
?>