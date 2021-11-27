<?php
    require_once 'FPDF.php';

    class PDF extends FPDF {
        
        // Cabecera de página
        function Header() {
            // Logo
            // $this->Image('logo.png',10,8,33);
            // Arial bold 15
            $this->SetFont('Arial','B',15);
            // Movernos a la derecha
            $this->Cell(60);
            // Título
            $this->Cell(80,10,'Nombre de la Empresa',1,0,'C');
            // Salto de línea
            $this->Ln(20);
        }

        // Pie de página
        function Footer() {
            // Posición: a 1,5 cm del final
            $this->SetY(-15);
            // Arial italic 8
            $this->SetFont('Arial','I',8);
            // Número de página
            $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
        }
    }
?>