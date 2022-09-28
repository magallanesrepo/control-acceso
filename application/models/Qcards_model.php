<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Qcards_model extends CI_Model {
      

    protected $table = 'cards';
       protected $table2 = 'access';

    public function __construct() {
        parent::__construct();

    }

    public function get_count() {
        return $this->db->count_all($this->table);
    }

    public function get_access($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get($this->table);

        return $query->result();
    }


      public function checkdata(){

       $code = $this -> input -> post('code');

       $query = $this->db->query("SELECT * FROM cards inner join invoices on cards.invoice=invoices.inumber inner join client
        on client.client_id=invoices.client_id
        WHERE cards.cardid='$code'");

foreach ($query->result() as $key){

  $ayearfromnoww=date('d/m/Y',strtotime($key->ayearfromnow));
  $rightnoww=date('d/m/Y',strtotime($key->rightnow));

echo $this->session->set_flashdata('msg',"Factura Nro: $key->invoice <br> Cliente: $key->client_name $key->client_lastname <br>
            Validéz: $rightnoww - $ayearfromnoww <br> Accesos Restantes: $key->accesos_exitosos");

redirect("Carddata/showdata");


    // var_dump($query->result());

//return $query->result();
}

      }


      /*  public function get_specificcards() {
     
$query = $this->db->query("SELECT * FROM cards WHERE invoice IN (SELECT currentinvoice FROM users WHERE user_id='".$this->session->userdata('usid')."')");

return $query->result();
 
    }*/


}