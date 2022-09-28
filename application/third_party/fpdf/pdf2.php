<?php
//require('fpdf.php');
class PDF2 extends FPDF
{
// Page header
function Header()
{
	$logo = base_url()."assets/images/LOGO-FINAL-USO-PERMITIDO1.jpg";
	$this-> SetFont('Arial','B',14);
	$this->Image($logo,1,3,60,23,'jpeg');
	$this->Cell(30,10,'');
	$this->Cell(115,5,'',0,0,'C'); 
	$this->SetFont('Arial','',9);
	$this-> Cell(95,10,'',0);
	$this-> Cell(10,10,'Fecha:',0,0,'C');
	$this-> Cell(10,10,date('d/m/Y'),0,0);
	$this-> Cell(8,10,'');
	$this-> Cell(1,10,',',0,0,'C');
	$this-> Cell(10,10,date("G:i:s"),0,1,'G');
	
	$this-> SetFont('Arial','B',14);
	$this->Cell(185,9,'SALTA Trampoline Park',0,0,'C');
	$this->Ln();
	$this->SetFont('Arial','',9);
	$this->Cell(0,0,'',1,1,'');
}

// Page footer
function Footer()
{
	$this->SetY(-12);
	$this->SetFont('Arial','B',8);
$address=utf8_decode('Naguanagua, Carabobo');
	$this->Cell(0,0,'',1,1,''); 
	$this->Cell(0,5,$address,0,1,'C');
	$this->Cell(0,5,'Pag '.$this->PageNo().'/{nb}',0,0,'C');
}
}
?>