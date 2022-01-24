<?php 
require ('../../fpdf184/fpdf.php');
include '../config.php';
session_start();

$PrgrmName = $_SESSION['programNAME'];
$PrgrmID = $_SESSION['programID'];

$pdf = new FPDF();
$pdf->AddPage('L', 'A4', 0);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(276, 10, $PrgrmName, 0,0, 'C');
$pdf->Ln();

$pdf->SetFont('Arial', 'B', '8');
$pdf->Cell(26, 7, 'HOUSE NUMBER', 1, 0, 'C');
$pdf->Cell(30, 7, 'LAST NAME', 1, 0, 'C');
$pdf->Cell(30, 7, 'FIRST NAME', 1, 0, 'C');
$pdf->Cell(25, 7, 'MIDDLE NAME', 1, 0, 'C');
$pdf->Cell(15, 7, 'SUFFIX', 1, 0, 'C');
$pdf->Cell(20, 7, 'BIRTHDATE', 1, 0, 'C');
$pdf->Cell(10, 7, 'AGE', 1, 0, 'C');
$pdf->Cell(35, 7, 'CONTACT NUMBER', 1, 0, 'C');
$pdf->Cell(55, 7, 'ADDRESS', 1, 0, 'C');
$pdf->Cell(30, 7, 'PROGRAM', 1, 0, 'C');
$pdf->Ln();

$pdf->SetFont('Arial', '', '8');
$sql = "SELECT HOUSENUMBER, FIRSTNAME, LASTNAME, MIDDLENAME, SUFFIX, BIRTHDATE, AGE, CONTACTNUMBER, ADDRESS, programs.ProgramName
FROM residents
INNER JOIN programs ON programs.ProgramID = residents.ProgramID
WHERE programs.ProgramID = '$PrgrmID';";

$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($result->num_rows > 0) {
    while($data = $result->fetch_assoc()) {
        $pdf->Cell(26, 5, $data['HOUSENUMBER'], 1, 0, 'C');
        $pdf->Cell(30, 5, $data['LASTNAME'], 1, 0, 'C');
        $pdf->Cell(30, 5, $data['FIRSTNAME'], 1, 0, 'C');
        $pdf->Cell(25, 5, $data['MIDDLENAME'], 1, 0, 'C');
        $pdf->Cell(15, 5, $data['SUFFIX'], 1, 0, 'C');
        $pdf->Cell(20, 5, $data['BIRTHDATE'], 1, 0, 'C');
        $pdf->Cell(10, 5, $data['AGE'], 1, 0, 'C');
        $pdf->Cell(35, 5, $data['CONTACTNUMBER'], 1, 0, 'C');
        $pdf->Cell(55, 5, $data['ADDRESS'], 1, 0, 'C');
        $pdf->Cell(30, 5, $data['ProgramName'], 1, 0, 'C');
        $pdf->Ln();
    }
}

$pdf->Output();
?>




