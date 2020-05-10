<?php
require('../../pdf/fpdf.php');

date_default_timezone_set('America/Mexico_City');
$fechaHoy = date("d/m/Y");

require_once "../conexion.php";
    $conexion = conexion();
    $desde = $_POST['desde'];
    $hasta = $_POST['hasta'];
//$fpdf = new FPDF();

class PDF extends FPDF
{
    //** ENCABEZADO **
public function Header()
{
    $this->Image('ccStore_Azul.jpg',20,15,45); //logo, posicion y tamaño
    $this->SetFont('Arial','B',10);
    $this->SetTextColor(88, 88, 88);
    $this->SetX(-60);
    $this->Ln(5);
    //$this->Write(10,'ccStore');//texto y su posicion en Y  
      
}
    //** PIE DE PAGINA **
public function Footer()
{
    $this->SetY(-15);//posicion en Y
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Pagina').$this->PageNo().'/{nb}',0,0,'C');
}
}
    //** CREAR EL PDF **
    $pdf = new PDF();
    $pdf->AliasNbPages();//hace el conteo de las pag
    $pdf->AddPage();//agrega pagina
    $pdf->SetX(-58);
    $pdf->SetTextColor(88, 88, 88);
    $pdf->Cell(20,20,'Fecha de creacion: '.$fechaHoy, 0,0,'C',0);
    $pdf->SetX(-62);
    $pdf->Cell(20,30,'Periodo: '.$desde.' / '.$hasta, 0,1,'C',0);
    //$pdf->Cell(20,20,'Reporte del: '.$desde, 0,1,'C',0);
    $pdf->SetMargins(10,30,20,20); //margen al contenido
    
    
    $pdf->SetTextColor(0, 0, 0);
    $pdf->SetFont('Arial','B',13);
    $pdf->SetY(30);//posicion en Y
    $pdf->Ln(10);
    $pdf->Cell(0,5,'Reporte salida de productos', 0,0,'C');
    $pdf->Ln(10);//salto de linea y su tamaño

    //** Encabezado de la tabla **
    $pdf->SetFont('Arial','B',11);
    $pdf->SetX(20);//posicion en X
    $pdf->Cell(40,9,'Codigo de Barras', 0,0,'C',0);
    $pdf->Cell(60,9,'Marca', 0,0,'C',0);
    $pdf->Cell(65,9,'Modelo', 0,0,'C',0);
    $pdf->Cell(20,9,'Cantidad', 0,0,'C',0);
    $pdf->Cell(41,9,'Fecha', 0,0,'C',0);
    $pdf->Cell(30,9,'Usuario', 0,1,'C',0);
    $pdf->SetDrawColor(2, 119, 189);//pinta lo que se quiere (linea)
    $pdf->SetLineWidth(1);//grosor de la linea
    $pdf->Line(20,50,275,50);//linea y posicion

    //****TABLA SALIDA***** 
    $pdf->Ln(2);//salto de linea tamaño
    $pdf->SetFont('Arial','',10);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->SetDrawColor(255, 255, 255);
    $pdf->SetLineWidth(1);
    
    $SDATE = $_POST['desde'];
    $SDATE = date("$SDATE 00:00:00");

    $EDATE = $_POST['hasta'];
    $EDATE = date("$EDATE 23:59:59");

    $sentencia = ("SELECT productos.codigo_barras AS codigo_barras, productos.marca AS marca, productos.modelo AS modelo, stock_salida, fechaRegistro, usuario 
    FROM salida INNER JOIN productos ON salida.id_productos = productos.id_productos WHERE fechaRegistro BETWEEN '$SDATE' AND '$EDATE'");
    $query = mysqli_query($conexion,$sentencia);
    
    while($row = $query -> fetch_assoc()){
        $pdf->SetX(20);//posicion en X
        $pdf->SetFillColor(248, 249, 249 ); //relleno de la tabla y su color

        $pdf->Cell(40,8, $row['codigo_barras'], 1,0,'C',1);
        $pdf->Cell(60,8, $row['marca'], 1,0,'C',1);
        $pdf->Cell(65,8, $row['modelo'], 1,0,'C',1);
        $pdf->Cell(20,8, $row['stock_salida'], 1,0,'C',1);
        $pdf->Cell(41,8, $row['fechaRegistro'], 1,0,'C',1);
        $pdf->Cell(30,8, $row['usuario'], 1,1,'C',1);
    }
    
    $pdf->Output();
?>