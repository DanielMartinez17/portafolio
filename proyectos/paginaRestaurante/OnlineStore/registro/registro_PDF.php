<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
	$this->Image('images/logomr-PNG.PNG',90,25,30,30,'png','');
    // Arial bold 15
    $this->SetFont('Arial','B',12);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(30,10,'Registros de:',0,0,'C');
    // Salto de línea
    $this->Ln(50);

	$this->Cell(25,10, 'NumPedido', 1, 0, 'C', 0);
	$this->Cell(25,10, 'Fecha', 1, 0, 'C', 0);
	$this->Cell(70,10, 'NIT', 1, 0, 'C', 0);
	$this->Cell(25,10, 'Descuento', 1, 0, 'C', 0);
	$this->Cell(25,10, 'TotalPagar', 1, 0, 'C', 0);
	$this->Cell(25,10, 'Estado', 1, 1, 'C', 0);

}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página').$this->PageNo().'/{nb}',0,0,'C');
}
}

require 'cn.php';
$consulta = "SELECT * FROM venta";
$resultado = $mysqli->query($consulta);

$pdf = new PDF();
$pdf-> AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);

while($row = $resultado-> fetch_assoc()){
	$pdf->Cell(25,10, $row['NumPedido'], 1, 0, 'C', 0);
	$pdf->Cell(25,10, $row['Fecha'], 1, 0, 'C', 0);
	$pdf->Cell(70,10, $row['NIT'], 1, 0, 'C', 0);
	$pdf->Cell(25,10, $row['Descuento'], 1, 0, 'C', 0);
	$pdf->Cell(25,10, $row['TotalPagar'], 1, 0, 'C', 0);
	$pdf->Cell(25,10, $row['Estado'], 1, 1, 'C', 0);



}
$pdf->Output();
?>