<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Qlog extends CI_Controller {


        public function __construct(){


            parent::__construct();
            $this->load->helper('url');
            $this->load->library('session');
            $this->load->model('Qlog_model');
             $this->load->library("pagination");
    $this->load->helper('array');
    // $this->load->helper("phpqrcode/qrlib.php");


if ($this->session->userdata('usid')=='') {
     echo $this->session->set_flashdata('msg','Usted debe Iniciar Sesion Primero');
    redirect('Welcome');
}

        }

          public function index() {



        $config = array();
        $config["base_url"] = base_url() . "index.php/Qlog/index";
       // $config["total_rows"] = $this->Invoice_model->get_count();
        $config["per_page"] = 2;
        $config["uri_segment"] = 3;
        
        $config["first_link"] = "Primero";
        $config["last_link"] = "Ultimo";

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $data["links"] = $this->pagination->create_links();

        //$data['result'] = $this->Invoice_model->get_invoice($config["per_page"], $page);


          $data['ninethirty'] = $this->Qlog_model->get_day_logs('09:30:00','10:30:59');
           $data['tenthirty'] = $this->Qlog_model->get_day_logs('10:31:00','11:30:59');
            $data['eleventhirty'] = $this->Qlog_model->get_day_logs('11:31:00','12:30:59');
             $data['twelvethirty'] = $this->Qlog_model->get_day_logs('12:31:00','13:30:59');
              $data['thirteenthirty'] = $this->Qlog_model->get_day_logs('13:31:00','14:30:59');
               $data['fourteenthirty'] = $this->Qlog_model->get_day_logs('14:31:00','15:30:59');
                $data['fifteenthirty'] = $this->Qlog_model->get_day_logs('15:31:00','16:30:59');
                 $data['sixteenthirty'] = $this->Qlog_model->get_day_logs('16:31:00','17:30:59');
                 $data['seventeenthirty'] = $this->Qlog_model->get_day_logs('17:31:00','18:30:59');
                   $data['eighteenthirty'] = $this->Qlog_model->get_day_logs('18:31:00','19:30:59');
                   $data['nineteenthirty'] = $this->Qlog_model->get_day_logs('19:31:00','20:30:59');

                   $data['datee'] = $this->Qlog_model->get_date();

       // $data['last'] = $this->Invoice_model->get_count();
        $data['userdatas'] =  $this->session->userdata();
          // $data['currentclient'] =  $this->Invoice_model->get_currentclient();

          $data['username']=$this->session->userdata('name');
          $data['userlastname']=$this->session->userdata('lastname');





if ($this->session->userdata('level')=='1') {
  $this->load->view('headerview');
}
else
{
    $this->load->view('header2view');
}





       
                $this->load->view('qlogview', $data);
            $this->load->view('footerview', $data);
    }


        public function findLogs(){
          $this->Qlog_model->getlogs();
          redirect('Qlog');

        } 



        public function pdfreport(){

          
          $data['ninethirty'] = $this->Qlog_model->get_day_logs('09:30:00','10:30:59');
           $data['tenthirty'] = $this->Qlog_model->get_day_logs('10:31:00','11:30:59');
            $data['eleventhirty'] = $this->Qlog_model->get_day_logs('11:31:00','12:30:59');
             $data['twelvethirty'] = $this->Qlog_model->get_day_logs('12:31:00','13:30:59');
              $data['thirteenthirty'] = $this->Qlog_model->get_day_logs('13:31:00','14:30:59');
               $data['fourteenthirty'] = $this->Qlog_model->get_day_logs('14:31:00','15:30:59');
                $data['fifteenthirty'] = $this->Qlog_model->get_day_logs('15:31:00','16:30:59');
                 $data['sixteenthirty'] = $this->Qlog_model->get_day_logs('16:31:00','17:30:59');
                 $data['seventeenthirty'] = $this->Qlog_model->get_day_logs('17:31:00','18:30:59');
                   $data['eighteenthirty'] = $this->Qlog_model->get_day_logs('18:31:00','19:30:59');
                   $data['nineteenthirty'] = $this->Qlog_model->get_day_logs('19:31:00','20:30:59');

$ninethirty=$data['ninethirty'][0]->accesstime;
$tenthirty=$data['tenthirty'][0]->accesstime;
$eleventhirty=$data['eleventhirty'][0]->accesstime;
$twelvethirty=$data['twelvethirty'][0]->accesstime;
$thirteenthirty=$data['thirteenthirty'][0]->accesstime;
$fourteenthirty=$data['fourteenthirty'][0]->accesstime;
$fifteenthirty=$data['fifteenthirty'][0]->accesstime;
$sixteenthirty=$data['sixteenthirty'][0]->accesstime;
$seventeenthirty=$data['seventeenthirty'][0]->accesstime;
$eighteenthirty=$data['eighteenthirty'][0]->accesstime;
$nineteenthirty=$data['nineteenthirty'][0]->accesstime;

          require_once APPPATH.'third_party/fpdf/fpdf.php';
          //require_once APPPATH.'third_party/fpdf/rpdf.php';
          require_once APPPATH.'third_party/fpdf/PDF2.php';

          $pdf=new PDF2();
          $pdf->AliasNbPages();
          $pdf->AddPage('P','A4',0);
          // $pdf1->SetFont('Arial','B',10);
          $pdf->SetFont('Arial','B',10);
          $pdf->Ln(4);

          $pdf ->Cell(190,5,'Reporte de Accesos Diarios',0,1,'C');
          $pdf->Ln(5);
          // CREACION DE TABLAS
          $pdf->Ln(1);
          $pdf->SetFillColor(232,232,232);
          $pdf->SetTextColor(0,0,0);
          $pdf->SetFont('Arial','B',10);
       
          $pdf -> Cell(60,8,'Bloque',1,0,'C',1);
          $pdf -> Cell(70,8,'Cantidad de Accesos',1,0,'C',1);
          $pdf -> Cell(60,8,'Color',1,1,'C',1);

          $pdf ->Cell(60,8,'10:00 am - 01:00 pm',1,0,'C');         
          $pdf ->Cell(70,8,$ninethirty,1,0,'C');
          $pdf ->Cell(60,8,'Rosado',1,1,'C');

          $pdf ->Cell(60,8,'11:00 am - 02:00 pm',1,0,'C');         
          $pdf ->Cell(70,8,$tenthirty,1,0,'C');
          $pdf ->Cell(60,8,'Amarillo',1,1,'C');

          $pdf ->Cell(60,8,'12:00 pm - 03:00 pm',1,0,'C');         
          $pdf ->Cell(70,8,$eleventhirty,1,0,'C');
          $pdf ->Cell(60,8,'Azul',1,1,'C');

          $pdf ->Cell(60,8,'01:00 pm - 04:00 pm',1,0,'C');         
          $pdf ->Cell(70,8,$twelvethirty,1,0,'C');
          $pdf ->Cell(60,8,'Naranja',1,1,'C');

          $pdf ->Cell(60,8,'02:00 pm - 05:00 pm',1,0,'C');         
          $pdf ->Cell(70,8,$thirteenthirty,1,0,'C');
          $pdf ->Cell(60,8,'Morado',1,1,'C');

          $pdf ->Cell(60,8,'03:00 pm - 06:00 pm',1,0,'C');         
          $pdf ->Cell(70,8,$fourteenthirty,1,0,'C');
          $pdf ->Cell(60,8,'Rosado',1,1,'C');

          $pdf ->Cell(60,8,'04:00 pm - 07:00 pm',1,0,'C');         
          $pdf ->Cell(70,8,$fifteenthirty,1,0,'C');
          $pdf ->Cell(60,8,'Amarillo',1,1,'C');

         $pdf ->Cell(60,8,'05:00 pm - 08:00 pm',1,0,'C');         
          $pdf ->Cell(70,8,$sixteenthirty,1,0,'C');
          $pdf ->Cell(60,8,'Azul',1,1,'C');

          $pdf ->Cell(60,8,'06:00 pm - 09:00 pm',1,0,'C');         
          $pdf ->Cell(70,8,$seventeenthirty,1,0,'C');
          $pdf ->Cell(60,8,'Naranja',1,1,'C');

          $pdf ->Cell(60,8,'07:00 pm - 10:00 pm',1,0,'C');         
          $pdf ->Cell(70,8,$eighteenthirty,1,0,'C');
          $pdf ->Cell(60,8,'Morado',1,1,'C');

               
            

          
           $pdf->Output();
 
        } 
 


}