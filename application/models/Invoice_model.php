<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Invoice_model extends CI_Model {
      

    protected $table = 'invoices';
   // protected $table2 = 'users';
   // protected $table3 = 'concepts';
    //protected $table4 = 'cuotas';
    //protected $table5 = 'invoices_pack';
    public function __construct() {
        parent::__construct();

    }



      public function createinvoice()
        {


$inumb=$this -> input -> post('inumber');
$cardtype=$this -> input -> post('cardtype');

if ($cardtype==1) {

    $accessyear=60;
    
}
if ($cardtype==2) {
    
    $accessyear=120;

}
if ($cardtype==3) {

    $accessyear=192;
    
}

 $query = $this->db->query("SELECT currentclient FROM users WHERE user_id='".$this->session->userdata('usid')."'");


$ayearfromnow = date('Y-m-d', strtotime(date("Y-m-d", time()) . "365 day"));
$rightnow=date('Y-m-d');

 foreach ($query->result() as $key ) {
  
    $sql = "INSERT INTO invoices (inumber, clones, client_id, ayearfromnow, cardtype, accessyear, rightnow) VALUES ('$inumb', '$cardtype', ".$this->db->escape($key->currentclient).", '$ayearfromnow', '$cardtype', '$accessyear', '$rightnow')";
$this->db->query($sql);

 }

      



	/*	$data = array (

        		'inumber'=> $this -> input -> post('inumber'),
        		'clones'=> $this -> input -> post('clones'),
        		'email'=> $this -> input -> post('email'),





        	);
        	$this->db->insert('invoices', $data);

*/
if ($cardtype == 1) {
$clones = 1;
}else{
$clones = $this -> input -> post('clones');
}
/*if ($cardtype==1) {
 $clones=1;
}
if ($cardtype==2) {
 $clones=1;
}
if ($cardtype==3) {
 $clones=5;
}
*/


        	//$cardi=0;
$usid=$this->session->userdata('usid');

        	for ($i=1; $i <= $clones; $i++) { 
        		

        		$cardi=$this-> input -> post('inumber')."-".$i;


        		echo$sql1 = "INSERT INTO cards (cardid,invoice,ayearfromnow,rightnow,accesos_exitosos) VALUES ('$cardi', '".$this -> input -> post('inumber')."','$ayearfromnow', '$rightnow', '$accessyear')";
$this->db->query($sql1);


	$sql2 = "UPDATE users SET currentinvoice ='$inumb' WHERE user_id='$usid'";
$this->db->query($sql2);
/*
$sql3 = "UPDATE invoices SET client_id ='(SELECT currentclient from users WHERE user_id='".$usid."')' WHERE inumber='".$this -> input -> post('inumber')."'";
$this->db->query($sql3);*/

//redirect("CardsPrinta");



        	}



        

}







      public function get_currentclient()
        {

            $query = $this->db->query("SELECT * FROM client WHERE client_id IN (SELECT currentclient FROM users WHERE user_id='".$this->session->userdata('usid')."')");

return $query->result();

        }




}