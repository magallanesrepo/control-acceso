<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Qrcodegenerator extends CI_Controller {

    public function __construct() {
        parent:: __construct();

        $this->load->helper('url');
         $this->load->library('session');
        $this->load->model('Qrcodegenerator_model');
        $this->load->library("pagination");
             $this->load->library('ciqrcode');
         

    if ($this->session->userdata('usid')=='') {
     echo $this->session->set_flashdata('msg','Usted debe Iniciar Sesion Primero');
    redirect('Welcome');
}


    }

    public function index() {
        // $codeContents = 'Hello, testing qr code';
 
      //  $this->infiqr->generate('Hello, testing qr code', 'png');

$data['cards'] = $this->Qrcodegenerator_model->get_cardcodes();

foreach ($data['cards'] as $key) {
  
  $params['data'] = "http://192.168.137.1/controldeacceso/index.php/Checkmatch/checkcode/$key->cardid";
   //$params['data'] = uniqid()."a".$key->cardid;
//$params['data'] = $this->Qrcodegenerator_model->get_cardcodes();
$params['size'] = 10;
$params['savename'] = FCPATH."/assets/qrimages/$key->cardid.png";
$this->ciqrcode->generate($params);

}


     redirect("CardsPrinta");

      //  $data['concepts'] = $this->Qrcodegenerator_model->get_cards($config["per_page"], $page);
      //  $data['last'] = $this->Qrcodegenerator_model->get_count();
      //  $data['spcards'] = $this->Qrcodegenerator_model->get_specificcards();
       //  $data['spcardsdet'] = $this->Cardsprinta_model->get_specificcardsdet();



      /*  $this->load->view('headerview');
                $this->load->view('cardsprintaview', $data);
            $this->load->view('footerview');*/
    }

      /* public function create(){

            $this->Cardsprinta_model->createcards();
            redirect("CardsPrinta");


        } */

         public function update($id){

          //  $this->Qrcodegenerator_model->updateCards($id);
          //  echo "<div class='alert'>Inscription success</div>";
            //redirect("Concepts");


        } 


        public function delete($id){

           // $this->Qrcodegenerator_model->deleteCards($id);
          //  echo "<div class='alert'>Inscription success</div>";
            //redirect("Concepts");


        } 
         
}