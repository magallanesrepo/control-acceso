<?php
include_once("fpdf.php");
class PDF extends FPDF
{
	function Footer()
{

$this->SetY(-18);

$this->SetFont('Arial','B',8);

//$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
$this->Cell(0,0,'',1,1,''); 
$this->Cell(0,5,'Centro Comercial Caribbean Plaza Modulo 8 Local 173 - Valencia, Edo. Carabobo - Tlf: 0241.824.0980/0321',0,1,'C');
$this->Cell(0,5,'Email: taquilla@magallanesbbc.com.ve - RIF: J-075065500-6',0,1,'C');
$this->Cell(0,5,'Pag '.$this->PageNo().'/{nb}',0,0,'C');
   }


   function Header()
   {

$this-> SetFont('Arial','B',14);
$this->Image('../imagenes/logo-magallanes-full.png',10,5,25,23,'PNG');
$this->Cell(30,10,'');
$this->Cell(115,5,'',0,0,'C');
$this->SetFont('Arial','',9);
$this-> Cell(1,10,'',0);
$this-> Cell(8,10,'Fecha:',0,0,'C');
$this-> Cell(9,10,date('d/m/Y'),0,0);
$this-> Cell(8,10,'');
$this-> Cell(1,10,',',0,0,'C');
$this-> Cell(10,10,date("G:i:s"),0,1,'G');
$this-> SetFont('Arial','B',14);
$this->Cell(190,9,'FUNDACION MAGALLANES DE CARABOBO',0,0,'C');
$this->Ln();
$this->SetFont('Arial','',9);
$this->Cell(0,0,'',1,1,'');
$this->Ln(6);
$this-> SetFont('Arial','B',10);
$this-> Cell(30,1,'',0);
$this-> Cell(115,1,'Entrega de Carnets SIBCA',0,0,'C');

$this -> Ln();
$this -> Cell(30,8,'',0);
$this ->Cell(115,8,'LISTADO DE ABONADOS',0,1,'C');
$this ->SetFont('Arial','',8);
$this->Cell(1,8);
$this -> Cell(10,8,'Item',1,0,'C',0);
$this -> Cell(50,8,'Nombre',1,0,'C',0);
$this -> Cell(60,8,'Apellido',1,0,'C',0);
$this -> Cell(18,8,'Cedula',1,0,'C',0);
$this -> Cell(20,8,'Nro_Factura',1,0,'C',0);
$this -> Cell(30,8,'Firma',1,0,'C',0);
$this ->Ln(8);
   }
}//fin clase PDF
?>  

