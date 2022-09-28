<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Qaccess extends CI_Controller {


        public function __construct(){


            parent::__construct();
            $this->load->helper('url');
            $this->load->library('session');
            $this->load->model('Qaccess_model');
             $this->load->library("pagination");
    $this->load->helper('array');


if ($this->session->userdata('usid')=='') {
     echo $this->session->set_flashdata('msg','Usted debe Iniciar Sesion Primero');
    redirect('Welcome');
}

        }

          public function index() {



        $config = array();
        $config["base_url"] = base_url() . "index.php/Qaccess/index";
        $config["total_rows"] = $this->Qaccess_model->get_count();
        $config["per_page"] = 15;
        $config["uri_segment"] = 3;
        
        $config["first_link"] = "Primero";
        $config["last_link"] = "Ultimo";

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $data["links"] = $this->pagination->create_links();

        $data['result'] = $this->Qaccess_model->get_accesslog($config["per_page"], $page);
        $data['last'] = $this->Qaccess_model->get_count();
        $data['userdatas'] =  $this->session->userdata();
        $data['datee'] = $this->Qaccess_model->get_date();

        $data['username']=$this->session->userdata('name');
        $data['userlastname']=$this->session->userdata('lastname');

if ($this->session->userdata('level')=='1') {
  $this->load->view('headerview');
}
else
{
    $this->load->view('header2view');
}
       
                $this->load->view('qaccessview', $data);
            $this->load->view('footerview', $data);
    }


        public function create(){

            $this->Qaccess_model->createClient();
            redirect("Clients");


        } 


        public function update($id){

            $this->Qaccesss_model->updateClient($id);
          
        } 

        public function delete($id){

            $this->Qaccess_model->deleteClient($id);
          
        }

        public function findLogs(){
          $this->Qaccess_model->getlogs();
          redirect('Qaccess');

        }

        
        public function pdfreport(){

                $data['resultpdf'] = $this->Qaccess_model->get_accesslogforpdf();
 
          

      //$nineteenthirty=$data['nineteenthirty'][0]->accesstime;
      
                require_once APPPATH.'third_party/fpdf/fpdf.php';
                //require_once APPPATH.'third_party/fpdf/rpdf.php';
                require_once APPPATH.'third_party/fpdf/PDF2.php';
      
                $pdf=new PDF2();
                $pdf->AliasNbPages();
                $pdf->AddPage('P','A4',0);
                // $pdf1->SetFont('Arial','B',10);
                $pdf->SetFont('Arial','B',10);
                $pdf->Ln(4);
      
                $pdf ->Cell(190,5,'Reporte Detalldo de Accesos',0,1,'C');
                $pdf->Ln(5);
                // CREACION DE TABLAS
                $pdf->Ln(1);
                $pdf->SetFillColor(232,232,232);
                $pdf->SetTextColor(0,0,0);
                $pdf->SetFont('Arial','B',10);
             
                $pdf -> Cell(30,8,'#',1,0,'C',1);
                $pdf -> Cell(40,8,'Carnet',1,0,'C',1);
                $pdf -> Cell(40,8,'Fecha de Acceso',1,0,'C',1);
                $pdf -> Cell(40,8,'Hora de Acceso',1,0,'C',1);
                $pdf -> Cell(40,8,'Status',1,1,'C',1);
      
                
                     foreach ($data['resultpdf'] as $key ) {

                        $pdf ->Cell(30,8,$key->id,1,0,'C');         
                        $pdf ->Cell(40,8,$key->cardid,1,0,'C');
                        $pdf ->Cell(40,8,$key->access_date,1,0,'C');
                        $pdf ->Cell(40,8,$key->tim,1,0,'C');
                        $pdf ->Cell(40,8,$key->status,1,1,'C');
                            
                     }
                  
      
                
                 $pdf->Output();
       
              } 
       





}




/*

class Blog extends CI_Controller {

        public function index()
        {
                echo 'Hello World!';
        }

        public function comments()
        {
                echo 'Look at this!';
        }
}*


class Blog extends CI_Controller {

        public function shoes($sandals, $id)
        {
                echo $sandals;
                echo $id;
        }



}
*/
