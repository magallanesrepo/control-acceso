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


  public function get_accesslog($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get($this->table);

        return $query->result();
    }













}

?>