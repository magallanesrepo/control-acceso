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







if ($this->session->userdata('level')=='1') {
  $this->load->view('headerview');
}
else
{
    $this->load->view('header2view');
}





       
                $this->load->view('qlogview', $data);
            $this->load->view('footerview');
    }


        public function findLogs(){
          $this->Qlog_model->getlogs();
          redirect('Qlog');

        } 



}