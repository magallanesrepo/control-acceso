<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class General extends CI_Controller {


        public function __construct(){


            parent::__construct();
            $this->load->helper('url');
            $this->load->library('session');
            $this->load->model('General_model');
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
        $config["base_url"] = base_url() . "index.php/General/index";
       // $config["total_rows"] = $this->Invoice_model->get_count();
        $config["per_page"] = 2;
        $config["uri_segment"] = 3;
        
        $config["first_link"] = "Primero";
        $config["last_link"] = "Ultimo";

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $data["links"] = $this->pagination->create_links();

       // $data['result'] = $this->Invoice_model->get_invoice($config["per_page"], $page);
       // $data['last'] = $this->Invoice_model->get_count();
        $data['userdatas'] =  $this->session->userdata();
           $data['generaldata'] =  $this->General_model->getdata();

           $data['username']=$this->session->userdata('name');
           $data['userlastname']=$this->session->userdata('lastname');

if ($this->session->userdata('level')=='1') {
  $this->load->view('headerview');
}
else
{
    $this->load->view('header2view');
}





       
                $this->load->view('generalview', $data);
            $this->load->view('footerview', $data);
    }


        public function getall(){

            $this->General_model->getdata();
/*
                  $path = "base_url(); ?>/../assets/qrimages/";
        $file = $path.uniqid().".png";
*/



        



        } 

}