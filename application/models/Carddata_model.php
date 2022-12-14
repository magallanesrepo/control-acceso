<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Carddata_model extends CI_Model {
      

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


      public function check($code){

       /* $query = $this->db->query("SELECT * FROM cards WHERE cardid='".$code."'");

foreach ($query->result() as $key) {
    //$query->result()

    if ($code==$key->cardid) {
        echo"YES";
    }
    if ($code!=$key->cardid) {
        echo"NO";
    }
   
}
*/

//echo $this->db->count_all_results('my_table');  // Produces an integer, like 25
$this->db->where('cardid', $code);
$this->db->from('cards');

if ($this->db->count_all_results()>0) {

//redirect("Checkmatch/yes");
$flagexists=1;

 }  
 else
 {
    //redirect("Checkmatch/no");
    $flagexists=0;
 }


$query = $this->db->query("SELECT ayearfromnow FROM cards WHERE cardid='".$code."'");

//var_dump($query->result());

foreach ($query->result() as $key ) {
   $ayearfromnow=$key->ayearfromnow;
}

if ($ayearfromnow>date('Y-m-d')) {
  $flagdate=1;
}
else
{
  $flagdate=0;  
}





$query = $this->db->query("SELECT accessyear FROM invoices WHERE inumber in (SELECT invoice FROM cards WHERE cardid='".$code."')");
foreach ($query->result() as $key ) {
   $accessyear=$key->accessyear;
}


$this->db->where('cardid', $code);
$this->db->where('status', 'exitoso');
$this->db->from('accesslog');

if ($this->db->count_all_results()<$accessyear) {


$flagaccess=1;

 }  
 else
 {
   
    $flagaccess=0;
 }






if ($flagdate==1 and $flagexists==1 and $flagaccess==1) {

 echo $this->session->set_flashdata('msg','Acceso Permitido');
    
  $sql = "INSERT INTO accesslog (cardid, access_date, status) VALUES ('$code', '".date('Y-m-d')."', 'exitoso')";
$this->db->query($sql);


    redirect("Checkmatch/yes");
    
}

if ($flagdate==0 and $flagexists==1 and $flagaccess==1)
{

 echo $this->session->set_flashdata('msg','Carnet expirado');

      $sql = "INSERT INTO accesslog (cardid, access_date, status) VALUES ('$code', '".date('Y-m-d')."', 'fallido')";

 redirect("Checkmatch/no");

}

if ($flagdate==1 and $flagexists==0 and $flagaccess==1)
{

 echo $this->session->set_flashdata('msg','Carnet no registrado');

      $sql = "INSERT INTO accesslog (cardid, access_date, status) VALUES ('$code', '".date('Y-m-d')."', 'fallido')";

 redirect("Checkmatch/no");

}

if ($flagdate==1 and $flagexists==1 and $flagaccess==0)
{

 echo $this->session->set_flashdata('msg','Limite de accesos al a??o alcanzdo');

      $sql = "INSERT INTO accesslog (cardid, access_date, status) VALUES ('$code', '".date('Y-m-d')."', 'fallido')";

 redirect("Checkmatch/no");

}



      }


        public function get_specificcards() {
     
$query = $this->db->query("SELECT * FROM cards WHERE invoice IN (SELECT currentinvoice FROM users WHERE user_id='".$this->session->userdata('usid')."')");

return $query->result();
 
    }


}