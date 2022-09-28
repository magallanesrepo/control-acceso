<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Access extends CI_Controller {

    public function __construct() {
        parent:: __construct();

        $this->load->helper('url');
         $this->load->library('session');
        $this->load->model('Access_model');
        $this->load->library("pagination");

    if ($this->session->userdata('usid')=='') {
     echo $this->session->set_flashdata('msg','Usted debe Iniciar Sesion Primero');
    redirect('Welcome');
}



    }

    public function index() {
        $config = array();
        $config["base_url"] = base_url() . "index.php/Access";
        $config["total_rows"] = $this->Access_model->get_count();
        $config["per_page"] = 8;
        $config["uri_segment"] = 2;
        
        $config["first_link"] = "Primero";
        $config["last_link"] = "Ultimo";

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;

        $data["links"] = $this->pagination->create_links();

        $data['username']=$this->session->userdata('name');
        $data['userlastname']=$this->session->userdata('lastname');

      // $data['concepts'] = $this->Cardsprinta_model->get_cards($config["per_page"], $page);
       // $data['last'] = $this->Cardsprinta_model->get_count();
       // $data['spcards'] = $this->Cardsprinta_model->get_specificcards();
         //$data['spcardsdet'] = $this->Cardsprinta_model->get_specificcardsdet();
         if ($this->session->userdata('level')=='1') {
          $this->load->view('headerview');
        }
        else
        {
            $this->load->view('header2view');
        }
               
               $this->load->view('accessview', $data);
            $this->load->view('footerview', $data);
    }

      /* public function create(){

            $this->Cardsprinta_model->createcards();
            redirect("CardsPrinta");


        } */

         public function update($id){

            $this->Access_model->updateCards($id);
          //  echo "<div class='alert'>Inscription success</div>";
            //redirect("Concepts");


        } 


        public function delete($id){

            $this->Access_model->deleteCards($id);
          //  echo "<div class='alert'>Inscription success</div>";
            //redirect("Concepts");


        } 

  public function yes(){

           $this->load->view('headerview');
                $this->load->view('checkmatchyesview');
            $this->load->view('footerview');


        } 


         public function no(){

           $this->load->view('headerview');
                $this->load->view('checkmatchnoview');
            $this->load->view('footerview');


        } 


        

             public function checkcode(){

            $this->Access_model->checkaccess();
            
          //  echo "<div class='alert'>Inscription success</div>";
            //redirect("Concepts");


        } 
         
}