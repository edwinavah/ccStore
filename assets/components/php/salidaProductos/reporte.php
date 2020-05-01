<?php
require('../../pdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página

function Header()
{
    // Logo
    //$this->Image(' images/index.jpg',10,8,33);
    // Arial bold 15
    $this->SetFont('Arial','B',14);
    // Movernos a la derecha
    $this->Cell(60);
    // Título
    $this->Cell(80,10,'Reporte Salida de Productos',0,0,'C');
    // Salto de línea
    $this->Ln(20);

    $this->Cell(38,10,'Codigo_Barras', 1,0,'C',0);
    $this->Cell(35,10,'Marca', 1,0,'C',0);
    $this->Cell(35,10,'Modelo', 1,0,'C',0);
    $this->Cell(25,10,'Cantidad', 1,0,'C',0);
    $this->Cell(45,10,'Fecha', 1,1,'C',0);
  
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Pagina').$this->PageNo().'/{nb}',0,0,'C');
}
}

    require_once "../conexion.php";
    $conexion = conexion();

    $sentencia = "SELECT * FROM salida";
    $query = mysqli_query($conexion,$sentencia);
    
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',12);


    while($row = $query -> fetch_assoc()){
        $pdf->Cell(38,10, $row['codigo_barras'], 1,0,'C',0);
        $pdf->Cell(35,10, $row['marca'], 1,0,'C',0);
        $pdf->Cell(35,10, $row['modelo'], 1,0,'C',0);
        $pdf->Cell(25,10, $row['stock'], 1,0,'C',0);
        $pdf->Cell(45,10, $row['fechaRegistro'], 1,1,'C',0);
    }

$pdf->Output();
?>