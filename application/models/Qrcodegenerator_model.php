<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Qrcodegenerator_model extends CI_Model {
      

    protected $table = 'cards';
       protected $table2 = 'users';
   // protected $table2 = 'users';
   // protected $table3 = 'concepts';
    //protected $table4 = 'cuotas';
    //protected $table5 = 'invoices_pack';
    public function __construct() {
        parent::__construct();

    }



      public function createinvoice()
        {

 $query = $this->db->query("SELECT currentclient FROM users WHERE user_id='".$this->session->userdata('usid')."'");

 foreach ($query->result() as $key ) {
  
    $sql = "INSERT INTO invoices (inumber, clones, client_id) VALUES ('$inumb', '$cardtype', ".$this->db->escape($key->currentclient).")";
$this->db->query($sql);

 }

      


$inumb=$this -> input -> post('inumber');
$cardtype=$this -> input -> post('cardtype');

	/*	$data = array (

        		'inumber'=> $this -> input -> post('inumber'),
        		'clones'=> $this -> input -> post('clones'),
        		'email'=> $this -> input -> post('email'),





        	);
        	$this->db->insert('invoices', $data);

*/


if ($cardtype==1) {
 $clones=1;
}
if ($cardtype==2) {
 $clones=1;
}
if ($cardtype==2) {
 $clones=5;
}



        	$cardi=0;
$usid=$this->session->userdata('usid');

        	for ($i=1; $i <= $clones; $i++) { 
        		

        		$cardi=$this-> input -> post('inumber')."".$i;


        		$sql1 = "INSERT INTO cards (cardid,invoice) VALUES ('$cardi', '".$this -> input -> post('inumber')."')";
$this->db->query($sql1);


	$sql2 = "UPDATE users SET currentinvoice ='$inumb' WHERE user_id='$usid'";
$this->db->query($sql2);
/*
$sql3 = "UPDATE invoices SET client_id ='(SELECT currentclient from users WHERE user_id='".$usid."')' WHERE inumber='".$this -> input -> post('inumber')."'";
$this->db->query($sql3);*/

//redirect("CardsPrinta");



        	}



        

}





/*

      public function get_currentclient()
        {

            $query = $this->db->query("SELECT * FROM client WHERE client_id IN (SELECT currentclient FROM users WHERE user_id='".$this->session->userdata('usid')."')");

return $query->result();

        }
*/

   public function get_cardcodes()
        {

            $query = $this->db->query("SELECT * FROM cards WHERE invoice IN (SELECT currentinvoice FROM users WHERE user_id='".$this->session->userdata('usid')."')");

return $query->result();

        }


}