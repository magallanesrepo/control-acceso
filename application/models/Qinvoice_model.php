<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Qinvoice_model extends CI_model {


  protected $table = 'invoices';


	
    public function __construct() {
        parent::__construct();

    }

       public function get_count() {
        return $this->db->count_all($this->table);
    }


  public function get_invoicelog() {

        $inv = $this->input->post('inv');

        $this->db->query("update users set invoice_search = '$inv' where user_id = '".$this->session->userdata('usid')."'");
        
        /*$query = $this->db->get($this->table);*/

        /*
        $this->db->select('inumber, clones, cardtype, accessyear, cardid');
        $this->db->from('invoices');
        $this->db->join('cards', 'cards.cardid = invoices.inumber');
        $query = $this->db->get();*/

    }


  public function search_cards() {

        $query = $this->db->query("select * from cards where invoice in (select invoice_search from users where user_id = '".$this->session->userdata('usid')."')");

        return $query->result();

  }











}

?>