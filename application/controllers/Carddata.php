<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Carddata extends CI_Controller {

    public function __construct() {
        parent:: __construct();

        $this->load->helper('url');
         $this->load->library('session');
        $this->load->model('Carddata_model');
        $this->load->library("pagination");

    if ($this->session->userdata('usid')=='') {
     echo $this->session->set_flashdata('msg','Usted debe Iniciar Sesion Primero');
    redirect('Welcome');
}



    }

    public function index() {
        $config = array();
        $config["base_url"] = base_url() . "index.php/Checkmatch";
       // $config["total_rows"] = $this->Cardsprinta_model->get_count();
        $config["per_page"] = 8;
        $config["uri_segment"] = 2;
        
        $config["first_link"] = "Primero";
        $config["last_link"] = "Ultimo";

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;

        $data["links"] = $this->pagination->create_links();

       // $data['concepts'] = $this->Cardsprinta_model->get_cards($config["per_page"], $page);
       // $data['last'] = $this->Cardsprinta_model->get_count();
       // $data['code'] = $this->Cardsprinta_model->checkcode($code);
       //  $data['spcardsdet'] = $this->Cardsprinta_model->get_specificcardsdet();
       // $this->load->view('headerview');
         //       $this->load->view('checkmatchview', $data);
         //   $this->load->view('footerview');
    }

      /* public function create(){

            $this->Cardsprinta_model->createcards();
            redirect("CardsPrinta");


        } */

      

           public function showdata(){
            $data['username']=$this->session->userdata('name');
            $data['userlastname']=$this->session->userdata('lastname');

           $this->load->view('headerview');
                $this->load->view('carddataview');
            $this->load->view('footerview', $data);


        } 


       



         
}