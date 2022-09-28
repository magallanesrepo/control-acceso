<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Qinvoice extends CI_Controller {


        public function __construct(){


            parent::__construct();
            $this->load->helper('url');
            $this->load->library('session');
            $this->load->model('Qinvoice_model');
             $this->load->library("pagination");
    $this->load->helper('array');


if ($this->session->userdata('usid')=='') {
     echo $this->session->set_flashdata('msg','Usted debe Iniciar Sesion Primero');
    redirect('Welcome');
}

        }

          public function index() {



        $config = array();
        $config["base_url"] = base_url() . "index.php/Qinvoice/index";
        $config["total_rows"] = $this->Qinvoice_model->get_count();
        $config["per_page"] = 15;
        $config["uri_segment"] = 3;
        
        $config["first_link"] = "Primero";
        $config["last_link"] = "Ultimo";

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $data["links"] = $this->pagination->create_links();
        $data['result'] = $this->Qinvoice_model->search_cards();

        $data['last'] = $this->Qinvoice_model->get_count();
        $data['userdatas'] =  $this->session->userdata();

        $data['username']=$this->session->userdata('name');
        $data['userlastname']=$this->session->userdata('lastname');

if ($this->session->userdata('level')=='1') {
  $this->load->view('headerview');
}
else
{
    $this->load->view('header2view');
}
       
                $this->load->view('qinvoiceview', $data);
            $this->load->view('footerview', $data);
    }


        public function create(){

            $this->Qinvoice_model->createClient();
            redirect("Clients");


        }

        public function getInvoices () {
            $this->Qinvoice_model->get_invoicelog();
            redirect('Qinvoice');
        }


        public function userUpdate() {
            $this->Qinvoice_model->addInvSearch();
        }


        public function update($id){

            $this->Qinvoice_model->updateClient($id);
          
        } 

        public function delete($id){

            $this->Qinvoice_model->deleteClient($id);
          
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
