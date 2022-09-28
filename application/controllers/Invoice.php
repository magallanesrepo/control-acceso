<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invoice extends CI_Controller {


        public function __construct(){


            parent::__construct();
            $this->load->helper('url');
            $this->load->library('session');
            $this->load->model('Invoice_model');
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
        $config["base_url"] = base_url() . "index.php/Invoice/index";
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
           $data['currentclient'] =  $this->Invoice_model->get_currentclient();

           $data['username']=$this->session->userdata('name');
           $data['userlastname']=$this->session->userdata('lastname');

if ($this->session->userdata('level')=='1') {
  $this->load->view('headerview');
}
else
{
    $this->load->view('header2view');
}





       
                $this->load->view('Invoiceview', $data);
            $this->load->view('footerview', $data);
    }


        public function create(){

            $this->Invoice_model->createInvoice();
/*
                  $path = "base_url(); ?>/../assets/qrimages/";
        $file = $path.uniqid().".png";
*/



            redirect("Qrcodegenerator");




        } 

/*
        public function update($id){

            $this->Invoice_model->updateInvoice($id);
          
        } 

        public function delete($id){

            $this->Invoice_model->deleteInvoice($id);
          
        } */


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
