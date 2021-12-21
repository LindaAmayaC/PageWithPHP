<?php
require('fpdf/fpdf.php');
date_default_timezone_set("America/Bogota");

$servidor = "localhost";
$nombreusuario = "root";
$password = "12345678";
$dbunad= "dbunad17";

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Image('logo.png',10,10,-150);
$pdf->Ln(20);
$pdf->Cell(90,20,'Fecha: '.date('d.m.Y.H.i.s').'',0);
$pdf->Ln(10);
$pdf->Cell(100,20,utf8_decode('REPORTES PDF'));
$pdf->Ln(10);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(20,20,'CODIGO');
$pdf->Cell(25,20,'NOMBRE');
$pdf->Cell(25,20,'MARCA');
$pdf->Cell(40,20,'PRECIO');
$pdf->Cell(15,20,'CANTIDAD');



$pdf->Ln(10);


$pdf->SetFont('Arial','',8);

$conx = mysqli_connect($servidor, $nombreusuario, $password,$dbunad);

if (!$conx) {
    die("Connection failed: " . mysqli_connect_error());
}


$query_select = 'SELECT * FROM tabla17';
$resultado = mysqli_query($conx,$query_select );

if (mysqli_num_rows($resultado) > 0) {
    
    while($reg = mysqli_fetch_assoc($resultado)) {
    	$pdf->Cell(20,20, $reg['codigo'], 0);

        $pdf->Cell(25,20, utf8_decode($reg['nombre']), 0);

        $pdf->Cell(25,20, utf8_decode($reg['marca']), 0);

        $pdf->Cell(40,20, utf8_decode($reg['precio']), 0);

        $pdf->Cell(15,20, utf8_decode($reg['cantidad']), 0);

        $pdf->Ln(10);

    }
}

$pdf->Output();
?>
