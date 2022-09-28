<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cardsprinta_model extends CI_Model {
      

    protected $table = 'cards';
       protected $table2 = 'users';

    public function __construct() {
        parent::__construct();

    }

    public function get_count() {
        return $this->db->count_all($this->table);
    }

    public function get_cards($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get($this->table);

        return $query->result();
    }

        public function get_specificcards() {
     
$query = $this->db->query("SELECT * FROM cards WHERE invoice IN (SELECT currentinvoice FROM users WHERE user_id='".$this->session->userdata('usid')."')");

return $query->result();
 
    }


    public function get_specificcard($cardid) {
     
$query = $this->db->query("SELECT * FROM cards inner join invoices on invoices.inumber=cards.invoice inner join client on invoices.client_id=client.client_id WHERE cards.cardid='$cardid'");

return $query->result();

 
    }



    public function deliverCards(){


                $name = $this -> input -> post('name');
                $id = $this -> input -> post('id');



$query = $this->db->query("UPDATE cards SET namedel='$name', delivered='YES' WHERE id='$id'");

 //$query->result();

  redirect("CardsPrinta");


    }

    public function printCards($cardid){


//$name = $this -> input -> post('name');
      //  $id = $this -> input -> post('id');



$query = $this->db->query("UPDATE cards SET printed='YES' WHERE cardid='$cardid'");

//$query->result();

//redirect("CardsPrinta");


}




  





}