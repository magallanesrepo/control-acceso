<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Qaccess_model extends CI_model {


  protected $table = 'accesslog';


	
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

  }


  public function get_accesslog($limit, $start) {

        $userId = $this->session->userdata('usid');
      $fechaInicio2 = $this->db->query("select log_search from users where user_id = '$userId'");
      $fechaFin2 = $this->db->query("select log_search_to from users where user_id = '$userId'");
      $fechaInicio2 = $fechaInicio2->result()[0]->log_search;
      $fechaFin2 = $fechaFin2->result()[0]->log_search_to;


        /*$this->db->limit($limit, $start);*/
        /*$query = $this->db->get($this->table);*/
        $query = $this->db->query("SELECT * FROM accesslog WHERE access_date between '$fechaInicio2' and '$fechaFin2' order by access_date desc limit $start, $limit");

        return $query->result();
    }


    public function get_accesslogforpdf() { 

      $userId = $this->session->userdata('usid');
    $fechaInicio2 = $this->db->query("select log_search from users where user_id = '$userId'");
    $fechaFin2 = $this->db->query("select log_search_to from users where user_id = '$userId'");
    $fechaInicio2 = $fechaInicio2->result()[0]->log_search;
    $fechaFin2 = $fechaFin2->result()[0]->log_search_to;


      /*$this->db->limit($limit, $start);*/
      /*$query = $this->db->get($this->table);*/
      $query = $this->db->query("SELECT * FROM accesslog WHERE access_date between '$fechaInicio2' and '$fechaFin2' order by access_date desc ");

      return $query->result();
  }







  public function get_date() {

     $query = $this->db->query("SELECT log_search, log_search_to from users where user_id = '".$this->session->userdata('usid')."'");

        return $query->result();
    
  }











}

?>