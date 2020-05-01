<?php
require('../../pdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página

function Header()
{
    // Logo
    $this->Image('ccStore_Azul.jpg',10,8,33);
    // Arial bold 15
    $this->SetFont('Arial','B',12);
    // Movernos a la derecha
    $this->Cell(60);
    // Título
    $this->Cell(80,10,'Reporte Salida de Productos',0,0,'C');
    // Salto de línea
    $this->Ln(20);

    $this->Cell(34,10,'Codigo_Barras', 1,0,'C',0);
    $this->Cell(31,10,'Marca', 1,0,'C',0);
    $this->Cell(31,10,'Modelo', 1,0,'C',0);
    $this->Cell(21,10,'Cantidad', 1,0,'C',0);
    $this->Cell(41,10,'Fecha', 1,0,'C',0);
    $this->Cell(30,10,'Usuario', 1,1,'C',0);
  
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

    $fechaDesde = $_POST['desde'];
    $fechaDesde = date("$fechaDesde 00:00:00");

    $fechaHasta = $_POST['hasta'];
    $fechaHasta = date("$fechaHasta 23:59:59");

    $sentencia = ("SELECT * FROM salida WHERE fechaRegistro BETWEEN '$fechaDesde' AND '$fechaHasta'");
    $query = mysqli_query($conexion,$sentencia);
    
    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Arial','',10);

    while($row = $query -> fetch_assoc()){
        $pdf->Cell(34,10, $row['codigo_barras'], 1,0,'C',0);
        $pdf->Cell(31,10, $row['marca'], 1,0,'C',0);
        $pdf->Cell(31,10, $row['modelo'], 1,0,'C',0);
        $pdf->Cell(21,10, $row['stock'], 1,0,'C',0);
        $pdf->Cell(41,10, $row['fechaRegistro'], 1,0,'C',0);
        $pdf->Cell(30,10, $row['usuario'], 1,1,'C',0);
    }

//$pdf->Cell(30,10, $fechaHasta, 0,1,'C',0);
$pdf->Output();
?>