<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class General_model extends CI_Model {
      

    protected $table = 'control';
   // protected $table2 = 'users';
   // protected $table3 = 'concepts';
    //protected $table4 = 'cuotas';
    //protected $table5 = 'invoices_pack';
    public function __construct() {
        parent::__construct();

    }



      public function getdata()
        {



 $query = $this->db->query("SELECT * FROM control WHERE id='1'");

return $query->result();

 }

      



}