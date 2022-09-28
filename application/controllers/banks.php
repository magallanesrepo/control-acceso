<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Banks extends CI_Controller {


        public function __construct(){


            parent::__construct();
            $this->load->helper('url');
            $this->load->library('session');
            $this->load->model('Banks_model');
             $this->load->library("pagination");
    $this->load->helper('array');


if ($this->session->userdata('usid')=='') {
     echo $this->session->set_flashdata('msg','Usted debe Iniciar Sesion Primero');
    redirect('Welcome');
}

        }

          public function index() {



        $config = array();
        $config["base_url"] = base_url() . "index.php/banks/index";
        $config["total_rows"] = $this->Banks_model->get_count();
        $config["per_page"] = 2;
        $config["uri_segment"] = 3;
        
        $config["first_link"] = "Primero";
        $config["last_link"] = "Ultimo";

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $data["links"] = $this->pagination->create_links();

        $data['result'] = $this->Banks_model->get_banks($config["per_page"], $page);
        $data['last'] = $this->Banks_model->get_count();
        $data['userdatas'] =  $this->session->userdata();

if ($this->session->userdata('level')=='1') {
  $this->load->view('headerview');
}
else
{
    $this->load->view('header2view');
}
       
                $this->load->view('banksview', $data);
            $this->load->view('footerview');
    }


        public function create(){

            $this->Banks_model->createBank();
            redirect("Banks");


        } 


        public function update($id){

            $this->Banks_model->updateBank($id);
          
        } 

        public function delete($id){

            $this->Banks_model->deleteBank($id);
          
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
