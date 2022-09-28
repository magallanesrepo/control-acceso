<?php
include_once("fpdf.php");
//include("../../sessionsheader.php");

class PDF extends FPDF{

function Footer(){


	$this->SetY(-12);
	$this->SetFont('Arial','B',8);

	//$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
	$this->Cell(0,0,'',1,1,''); 
	$this->Cell(0,5,'Av. Michelena, Estadio Jose Bernardo Perez, Valencia',0,1,'C');
	$this->Cell(0,5,'Pag '.$this->PageNo().'/{nb}',0,0,'C');

}


function Header(){

	//$u=$_SESSION['namex'];
	//$u=convertidor::invertir($u);src='../players/img_profilepicture/magallanes.png'>
	
	$this-> SetFont('Arial','B',14);
	$this->Image('../players/img_profilepicture/magallanes.png',10,5,25,23,'PNG');
	$this->Cell(30,10,'');
	$this->Cell(115,5,'',0,0,'C');
	$this->SetFont('Arial','',9);
	$this-> Cell(1,10,'',0);
	$this-> Cell(8,10,'Fecha:',0,0,'C');
	$this-> Cell(9,10,date('d/m/Y'),0,0);
	$this-> Cell(8,10,'');
	$this-> Cell(1,10,',',0,0,'C');
	$this-> Cell(10,10,date("G:i:s"),0,1,'G');
	//$this->Ln();
	//$this-> Cell(10,10,$u,0,1,'R');
	$this-> SetFont('Arial','B',14);
	$this->Cell(190,9,'MAGALLANES BBC',0,0,'C');
	$this->Ln();
	$this->SetFont('Arial','',9);
	$this->Cell(0,0,'',1,1,''); 
}
}//fin clase PDF
?>  

