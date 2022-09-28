<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Qlog_model extends CI_model {


  protected $table = 'logs';


	
    public function __construct() {
        parent::__construct();

    }

       public function get_count() {
        return $this->db->count_all($this->table);
    }



 public function getlogs() {

    $fechaInicio = $this->input->post('fecha-inicio');
    $fechaFin = $this->input->post('fecha-fin');

        $this->db->query("update users set log_search = '$fechaInicio' where user_id = '".$this->session->userdata('usid')."'");
        $this->db->query("update users set log_search_to = '$fechaFin' where user_id = '".$this->session->userdata('usid')."'");

        
        /*$query = $this->db->get($this->table);*/

        /*
        $this->db->select('inumber, clones, cardtype, accessyear, cardid');
        $this->db->from('invoices');
        $this->db->join('cards', 'cards.cardid = invoices.inumber');
        $query = $this->db->get();*/

    }






  public function get_day_logs($timea,$timeb) {

    $userId = $this->session->userdata('usid');
    $fechaInicio2 = $this->db->query("select log_search from users where user_id = '$userId'");
    $fechaFin2 = $this->db->query("select log_search_to from users where user_id = '$userId'");
    $fechaInicio2 = $fechaInicio2->result()[0]->log_search;
    $fechaFin2 = $fechaFin2->result()[0]->log_search_to;




     /*$query = $this->db->query("SELECT COUNT(tim) as accesstime FROM accesslog WHERE tim between '$timea' and '$timeb' AND access_date IN (select log_search from users where user_id = '".$this->session->userdata('usid')."')");*/
     $query = $this->db->query("SELECT COUNT(tim) as accesstime FROM accesslog WHERE tim between '$timea' and '$timeb' AND access_date between '$fechaInicio2' and '$fechaFin2'");

        return $query->result();
    
  }

 
  public function get_date() {

     $query = $this->db->query("SELECT log_search, log_search_to from users where user_id = '".$this->session->userdata('usid')."'");

        return $query->result();
    
  }

 




  public function _logs() {


  }







}

?>