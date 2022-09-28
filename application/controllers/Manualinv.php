<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Manualinv extends CI_Controller {

    public function __construct() {
        parent:: __construct();

        $this->load->helper('url');
           $this->load->library('session');
        $this->load->model('Manualinv_model');
        $this->load->library("pagination");

  if ($this->session->userdata('usid')=='') {
     echo $this->session->set_flashdata('msg','Usted debe Iniciar Sesion Primero');
    redirect('Welcome');
}

        
    }

    public function index() {
        $config = array();
        $config["base_url"] = base_url() . "index.php/manualinv/index";
        $config["total_rows"] = $this->Users_model->get_count();
        $config["per_page"] = 8;
        $config["uri_segment"] = 3;
        
        $config["first_link"] = "Primero";
        $config["last_link"] = "Ultimo";

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $data["links"] = $this->pagination->create_links();

        $data['result'] = $this->Manualinv_model->get_users($config["per_page"], $page);
        $data['last'] = $this->Manualinv_model->get_count();
       echo  $data['userr'] = $this->Manualinv_model->get_user();
        $this->load->view('headerview');
                $this->load->view('invoicesview', $data);
            $this->load->view('footerview');
    }

       public function create(){

            $this->Manualinv_model->createinvoice();
           // redirect("Aliquotes");


        } 


            public function createother(){

            $this->Manualinv_model->createOtherinvoice();
           // redirect("Aliquotes");


        } 






         public function update($id){

            $this->Users_model->updateUser($id);
          //  echo "<div class='alert'>Inscription success</div>";
            //redirect("Concepts");


        } 


      /*  public function delete($id){

            $this->Ts_model->deleteConcept($id);
          //  echo "<div class='alert'>Inscription success</div>";
            //redirect("Concepts");


        } */
         
}