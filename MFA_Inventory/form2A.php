<?php
    require_once 'fpdf/fpdf.php';


    class MyPdf extends FPDF{
        function header(){
            $this->Image('public/images/logo.png', 120, 6);
            $this->SetFont('Arial', 'B', 14);
            $this->Cell(276,5,'Employees',0,0,'C');
            $this->ln();
            $this->SetFont('Times', '', 12);
            $this->Cell(276,10,'Records of employees that have been assigned various equipments',0,0,'C');
            $this->ln(10);
        }

        function footer(){
            $this->SetY(-15);
            $this->SetFont('Arial', '', 8);
            $this->Cell(0,10,'Page'.$this->PageNo().'/{nb}',0,0,'C');
            
        }

        function headerTable(){
            $this->SetFont('Times', 'B', 12);
            $this->Cell(20,10,'#',1,0,'C');
            $this->Cell(40,10,'Name',1,0,'C');
            $this->Cell(50,10,'Job Title',1,0,'C');
            $this->Cell(40,10,'Directorate',1,0,'C');
            $this->Cell(40,10,'Assets',1,0,'C');
            $this->Cell(40,10,'Status',1,0,'C');
            $this->ln();
            
        }
    }
    $pdf = new MyPdf();
    $pdf->AliasNbPages();
    $pdf->AddPage('L', 'A4', 0);
    $pdf->headerTable();
    $pdf->Output();

?>