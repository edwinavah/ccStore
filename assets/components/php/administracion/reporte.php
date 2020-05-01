<?php
    require('../../pdf/fpdf_administracion.php');

    class PDF extends FPDF{
    // Cabecera de página

        function Header(){
            
            // Logo
            $this->Image('ccStore_Azul.jpg',10,8,40);
            // Arial bold 15
            $this->SetFont('Arial','B',10);
            // Movernos a la derecha
            $this->Cell(60);
            // Título
            $this->Cell(160,10,'Reporte de movimientos en inventario',0,0,'C');
            // Salto de línea
            $this->Ln(20);
            
            $this->Cell(25,7,'Usuario', 1,0,'C',0);
            $this->Cell(22,7,'Accion', 1,0,'C',0);
            $this->Cell(102,7,'Producto', 1,0,'C',0);
            $this->Cell(80,7,'Nota', 1,0,'C',0);
            $this->Cell(45,7,'Fecha', 1,1,'C',0);
        
        }

        // Pie de página
        function Footer(){
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

    $SDATE = $_POST['desde'];
    $SDATE = date("$SDATE 00:00:00");

    $EDATE = $_POST['hasta'];
    $EDATE = date("$EDATE 23:59:59");

    $sentencia = ("SELECT * FROM adminRegistros WHERE fecha BETWEEN '$SDATE' AND '$EDATE'");
    $query = mysqli_query($conexion,$sentencia);
        
    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Arial','',10);


        while($row = $query -> fetch_assoc()){
            $pdf->Cell(25,7, $row['usuario'], 1,0,'L',0);
            $pdf->Cell(22,7, $row['accion'], 1,0,'L',0);
            $pdf->Cell(102,7, $row['producto'], 1,0,'L',0);
            $pdf->Cell(80,7, $row['nota'], 1,0,'L',0);
            $pdf->Cell(45,7, $row['fecha'], 1,1,'L',0);
        }

    $pdf->Output();
?>