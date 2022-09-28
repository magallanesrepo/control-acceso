<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Access_model extends CI_Model {
      

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


      public function checkaccess(){

       $codee = $this -> input -> post('code');

       $codeear = explode("/", $codee);

       $code=$codeear[7];

       

       /*$codeexp = explode("a", $codefull);

       echo$code = $codeexp[1];*/

       /* $query = $this->db->query("SELECT * FROM cards WHERE cardid='".$code."'");

foreach ($query->result() as $key) {
    //$query->result()

    if ($code==$key->cardid) {
        echo"YES";
    }
    if ($code!=$key->cardid) {
        echo"NO";
    }
   
}*/


//echo $this->db->count_all_results('my_table');  // Produces an integer, like 25
$this->db->where('cardid', $code);
$this->db->from('cards');
if ($this->db->count_all_results()>0) {


//redirect("Checkmatch/yes");
$flagexists=1;


$query = $this->db->query("SELECT ayearfromnow FROM cards WHERE cardid='".$code."'");



foreach ($query->result() as $key ) {
   $ayearfromnow=$key->ayearfromnow;
}

if ($ayearfromnow>date('Y-m-d')) {
  $flagdate=1;




$query = $this->db->query("SELECT accessyear FROM invoices WHERE inumber in (SELECT invoice FROM cards WHERE cardid='".$code."')");
foreach ($query->result() as $key ) {
   $accessyear=$key->accessyear;
}


                    $this->db->where('cardid', $code);
                    $this->db->where('status', 'exitoso');
                    $this->db->from('accesslog');
                      $count_Accessyear=$this->db->count_all_results();
                    if ( $count_Accessyear<=$accessyear) {


                    $flagaccess=1;

                     
                          
                        $sql = "INSERT INTO accesslog (cardid, access_date, status, tim) VALUES ('$code', '".date('Y-m-d')."','exitoso','".date('H:i:s')."')";
                      $this->db->query($sql);
                      $realcount=$count_Accessyear+1;
                        $access_so_far=$accessyear-$realcount;

                        $sqlup = "UPDATE cards SET accesos_exitosos='$access_so_far' WHERE cardid='$code'";
                        $this->db->query($sqlup);



                         echo $this->session->set_flashdata('msg',"Acceso Permitido - $access_so_far restantes - Hora Actual: ".date('H:i:s')."");


                          redirect("Checkmatch/yes");

                     }  
                     else
                     {
                       
                        $flagaccess=0;

                                           echo $this->session->set_flashdata('msg','Limite de accesos al año alcanzdo');

                        $sql = "INSERT INTO accesslog (cardid, access_date, status, tim) VALUES ('$code', '".date('Y-m-d')."', 'fallido','".date('h:i:s')."')";
                  $this->db->query($sql);
                   redirect("Checkmatch/no");


                     }





}
else
{
  $flagdate=0;  

   echo $this->session->set_flashdata('msg','Carnet expirado');

      $sql = "INSERT INTO accesslog (cardid, access_date, status, tim) VALUES ('$code', '".date('Y-m-d')."', 'fallido','".date('H:i:s')."')";
$this->db->query($sql);
 redirect("Checkmatch/no");



}




 }  
 else
 {
    //redirect("Checkmatch/no");
    $flagexists=0;
     echo $this->session->set_flashdata('msg','Carnet no registrado');

      $sql = "INSERT INTO accesslog (cardid, access_date, status, tim) VALUES ('$code', '".date('Y-m-d')."', 'fallido','".date('H:i:s')."')";
$this->db->query($sql);
 redirect("Checkmatch/no");


 }


/*

$query = $this->db->query("SELECT ayearfromnow FROM cards WHERE cardid='".$code."'");



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
*/


/*

$query = $this->db->query("SELECT accessyear FROM invoices WHERE inumber in (SELECT invoice FROM cards WHERE cardid='".$code."')");
foreach ($query->result() as $key ) {
   $accessyear=$key->accessyear;
}


$this->db->where('cardid', $code);
$this->db->where('status', 'exitoso');
$this->db->from('accesslog');

if ($this->db->count_all_results()<=$accessyear) {


$flagaccess=1;

 }  
 else
 {
   
    $flagaccess=0;
 }

*/



/*

if ($flagdate==1 and $flagexists==1 and $flagaccess==1) {

 echo $this->session->set_flashdata('msg','Acceso Permitido');
    
  $sql = "INSERT INTO accesslog (cardid, access_date, status) VALUES ('$code', '".date('Y-m-d')."','exitoso')";
$this->db->query($sql);


    redirect("Checkmatch/yes");
    
}

if ($flagdate==0 and $flagexists==1 and $flagaccess==1)
{

 echo $this->session->set_flashdata('msg','Carnet expirado');

      $sql = "INSERT INTO accesslog (cardid, access_date, status) VALUES ('$code', '".date('Y-m-d')."', 'fallido')";
$this->db->query($sql);
 redirect("Checkmatch/no");

}

if ($flagdate==1 and $flagexists==0 and $flagaccess==1)
{

 echo $this->session->set_flashdata('msg','Carnet no registrado');

      $sql = "INSERT INTO accesslog (cardid, access_date, status) VALUES ('$code', '".date('Y-m-d')."', 'fallido')";
$this->db->query($sql);
 redirect("Checkmatch/no");

}

if ($flagdate==1 and $flagexists==1 and $flagaccess==0)
{

 echo $this->session->set_flashdata('msg','Limite de accesos al año alcanzdo');

      $sql = "INSERT INTO accesslog (cardid, access_date, status) VALUES ('$code', '".date('Y-m-d')."', 'fallido')";
$this->db->query($sql);
 redirect("Checkmatch/no");

}

*/

      }


        public function get_specificcards() {
     
$query = $this->db->query("SELECT * FROM cards WHERE invoice IN (SELECT currentinvoice FROM users WHERE user_id='".$this->session->userdata('usid')."')");

return $query->result();
 
    }


}