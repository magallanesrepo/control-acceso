<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->library('session');
       $this->load->model('Login_model');
       $this->load->helper('array');
  }



   public function auth() {

    if (isset($_POST['password'])) {
  

        if($this->Login_model->get_user($_POST['username'],$_POST['password'])) {

          redirect('Home');
        }else
        {
          echo $this->session->set_flashdata('msg','Combinación de Clave y Usuario Incorrecta');
          redirect('Welcome');

        }


    }


      
    }


    public function logout(){



$array_items = array('usid','name','lastname','email','status','level','registre_date','editdate','ipaddress','conndate','conntime');


$this->session->unset_userdata($array_items);



      $this->session->sess_destroy();
       redirect('Welcome');

    }



















 /*
  function logout(){
      $this->session->sess_destroy();
      redirect('login');
  }*/
 
}