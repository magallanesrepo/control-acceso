<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    public function __construct() {
        parent:: __construct();

        $this->load->helper('url');
           $this->load->library('session');
        $this->load->model('Users_model');
        $this->load->library("pagination");

  if ($this->session->userdata('usid')=='') {
     echo $this->session->set_flashdata('msg','Usted debe Iniciar Sesion Primero');
    redirect('Welcome');
}

        
    }

    public function index() {
        $config = array();
        $config["base_url"] = base_url() . "index.php/users/index";
        $config["total_rows"] = $this->Users_model->get_count();
        $config["per_page"] = 15;
        $config["uri_segment"] = 3;
        
        $config["first_link"] = "Primero";
        $config["last_link"] = "Ultimo";

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $data["links"] = $this->pagination->create_links();

        $data['result'] = $this->Users_model->get_users($config["per_page"], $page);
        $data['last'] = $this->Users_model->get_count();
        $data['username']=$this->session->userdata('name');
        $data['userlastname']=$this->session->userdata('lastname');

        $this->load->view('headerview');
                $this->load->view('usersview', $data);
            $this->load->view('footerview', $data);
    }

       public function create(){

            $this->Users_model->createUser();
           // redirect("Aliquotes");


        } 

         public function update(){

            $this->Users_model->updateUser();
          //  echo "<div class='alert'>Inscription success</div>";
            //redirect("Concepts");


        } 


      /*  public function delete($id){

            $this->Ts_model->deleteConcept($id);
          //  echo "<div class='alert'>Inscription success</div>";
            //redirect("Concepts");


        } */
         
}