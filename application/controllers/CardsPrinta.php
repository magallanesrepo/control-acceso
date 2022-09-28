<?php defined('BASEPATH') OR exit('No direct script access allowed');

class CardsPrinta extends CI_Controller {

    public function __construct() {
        parent:: __construct();

        $this->load->helper('url');
         $this->load->library('session');
        $this->load->model('Cardsprinta_model');
        $this->load->library("pagination");

    if ($this->session->userdata('usid')=='') {
     echo $this->session->set_flashdata('msg','Usted debe Iniciar Sesion Primero');
    redirect('Welcome');
}



    }

    public function index() {
        $config = array();
        $config["base_url"] = base_url() . "index.php/CardsPrinta";
        $config["total_rows"] = $this->Cardsprinta_model->get_count();
        $config["per_page"] = 8;
        $config["uri_segment"] = 2;
        
        $config["first_link"] = "Primero";
        $config["last_link"] = "Ultimo";

        

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;

        $data["links"] = $this->pagination->create_links();

        $data['concepts'] = $this->Cardsprinta_model->get_cards($config["per_page"], $page);
        $data['last'] = $this->Cardsprinta_model->get_count();
        $data['spcards'] = $this->Cardsprinta_model->get_specificcards();
       
        $data['username']=$this->session->userdata('name');
        $data['userlastname']=$this->session->userdata('lastname');
       //  $data['spcardsdet'] = $this->Cardsprinta_model->get_specificcardsdet();
       if ($this->session->userdata('level')=='1') {
        $this->load->view('headerview');
      }
      else
      {
          $this->load->view('header2view');
      }
             
                $this->load->view('cardsprintaview', $data);
            $this->load->view('footerview', $data);
    }

      /* public function create(){

            $this->Cardsprinta_model->createcards();
            redirect("CardsPrinta");


        } */

         public function update($id){

            $this->Cardsprinta_model->updateCards($id);
          //  echo "<div class='alert'>Inscription success</div>";
            //redirect("Concepts");


        } 

         public function deliver(){

            $this->Cardsprinta_model->deliverCards();
           /* echo "<div class='alert'>Inscription success</div>";
            redirect("Concepts");*/


        } 


        public function delete($id){

            $this->Cardsprinta_model->deleteCards($id);
          //  echo "<div class='alert'>Inscription success</div>";
            //redirect("Concepts");


        } 


        public function pdfcard($cardid)
{

    //$this->Cardsprinta_model->printCards($cardid);


     //Se agrega la clase desde thirdparty para usar FPDF
     require_once APPPATH.'third_party/fpdf/fpdf.php';
     require_once APPPATH.'third_party/fpdf/rpdf.php';
    // require_once APPPATH.'third_party/fpdf/createfont.php';
    $this->Cardsprinta_model->printCards($cardid);
    // $pdf = new FPDF();
     $pdf1=new RPDF();
 $data['card'] = $this->Cardsprinta_model->get_specificcard($cardid);
foreach ($data['card'] as $onecard ) {
   
}

$image = base_url()."assets/qrimages/$onecard->cardid.png";

  $condiciones = base_url()."assets/annualpassart/CONDITIONS.jpg";

if ($onecard->cardtype == 1) {
   $cardimage = base_url()."assets/annualpassart/SILVER1.jpg";
}
if ($onecard->cardtype == 2) {
   $cardimage = base_url()."assets/annualpassart/GOLD1.jpg";
}
if ($onecard->cardtype == 3) {
   $cardimage = base_url()."assets/annualpassart/BLACK1.jpg";
}



     $pdf1->AddPage('P','A4',0);
    // $pdf1->SetFont('Arial','B',10);
    $pdf1->AddFont('stalker1','');
     $pdf1->SetFont('stalker1','',18);


$pdf1->Image($cardimage,0,0,55,87);


//$pdf1->TextColor('256','256','256');

  //  $pdf1->AddPage('P','A4',0);
//$pdf1->SetFont('Arial','',40);
//$pdf1->TextWithRotation(50,65,'Hello',45,-45);
//$pdf1->SetFontSize(30);
if ($onecard->cardtype == 1) {
    $pdf1->SetTextColor(64,64,64);
 }
 if ($onecard->cardtype == 2) {
    $pdf1->SetTextColor(102,51,0);
 }
 if ($onecard->cardtype == 3) {
    $pdf1->SetTextColor(255,255,255);
 }
 

 $validity=date('d/m/Y',strtotime($onecard->ayearfromnow));
 $validityfrom=date('d/m/Y',strtotime($onecard->rightnow));
 //=date_format($onecard->ayearfromnow,"d/m/Y");
$pdf1->TextWithDirection(14,6,$onecard->client_name.' '.$onecard->client_lastname.'.','D');
$pdf1->SetFont('stalker1','',8);
$pdf1->TextWithDirection(9,7,utf8_decode('Válido desde: '.$validityfrom.'    Hasta: '.$validity),'D');
//$pdf1->TextWithDirection(40,80,utf8_encode('John Doe'),'U');
//$pdf1->TextWithDirection(110,50,'world!','R');
//$pdf1->TextWithDirection(110,50,'world!','D');

/*


function TextWithDirection($x, $y, $txt, $direction='R')
{
    if ($direction=='R')
        $s=sprintf('BT %.2F %.2F %.2F %.2F %.2F %.2F Tm (%s) Tj ET',1,0,0,1,$x*$this->k,($this->h-$y)*$this->k,$this->_escape($txt));
    elseif ($direction=='L')
        $s=sprintf('BT %.2F %.2F %.2F %.2F %.2F %.2F Tm (%s) Tj ET',-1,0,0,-1,$x*$this->k,($this->h-$y)*$this->k,$this->_escape($txt));
    elseif ($direction=='U')
        $s=sprintf('BT %.2F %.2F %.2F %.2F %.2F %.2F Tm (%s) Tj ET',0,1,-1,0,$x*$this->k,($this->h-$y)*$this->k,$this->_escape($txt));
    elseif ($direction=='D')
        $s=sprintf('BT %.2F %.2F %.2F %.2F %.2F %.2F Tm (%s) Tj ET',0,-1,1,0,$x*$this->k,($this->h-$y)*$this->k,$this->_escape($txt));
    else
        $s=sprintf('BT %.2F %.2F Td (%s) Tj ET',$x*$this->k,($this->h-$y)*$this->k,$this->_escape($txt));
    if ($this->ColorFlag)
        $s='q '.$this->TextColor.' '.$s.' Q';
    $this->_out($s);
}









TextWithDirection(10, 10,'NAME AND LASTNAME','U');*/

   //$pdf->Cell(0,0,'Hola mundo FPDF desde Codeigniter',0,1,'L');
     //$pdf->Cell(0,0,$pdf->Image($cardimage,5,35,0,45),0,1,'C');
//$pdf->RotatedImage($cardimage,85,60,40,16,45);
 

        $pdf1->AddPage('P','A4',0);
     $pdf1->SetFont('Arial','B',16);

      $pdf1->Cell(0,0,$pdf1->Image($condiciones,0,0,55,86),0,1,'C');
    $pdf1->Cell(0,0,$pdf1->Image($image,16,61,0,17),0,1,'C');

     $pdf1->Output('paginaEnBlanco.pdf' , 'I' );

}
         
}