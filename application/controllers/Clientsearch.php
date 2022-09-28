<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientsearch extends CI_Controller {


        public function __construct(){


            parent::__construct();
            $this->load->helper('url');
            $this->load->library('session');
            $this->load->model('Clientsearch_model');
             $this->load->library("pagination");
    $this->load->helper('array');


if ($this->session->userdata('usid')=='') {
     echo $this->session->set_flashdata('msg','Usted debe Iniciar Sesion Primero');
    redirect('Welcome');
}

        }

          public function index() {



        $config = array();
        $config["base_url"] = base_url() . "index.php/Clientsearch/index";
        $config["total_rows"] = $this->Clientsearch_model->get_count();
        $config["per_page"] = 2;
        $config["uri_segment"] = 3;
        
        $config["first_link"] = "Primero";
        $config["last_link"] = "Ultimo";

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $data["links"] = $this->pagination->create_links();

        //$data['result'] = $this->Clientsearch_model->get_banks($config["per_page"], $page);
        $data['last'] = $this->Clientsearch_model->get_count();
        $data['clients'] = $this->Clientsearch_model->getClient();
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
       
                $this->load->view('clientsearchview', $data);
            $this->load->view('footerview', $data);
    }


        public function create(){

            $this->Clientsearch_model->createClient();
            redirect("Clientsearch");


        } 


        public function update($id){

            $this->Clientsearch_model->updateClient($id);
          
        } 

        public function delete($id){

            $this->Clientsearch_model->deleteClient($id);
          
        } 

         public function select($id){

            $this->Clientsearch_model->getClient($id);
          
        } 

         public function take(){

            $this->Clientsearch_model->takeClient($id);
               redirect("Invoice");
          
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
