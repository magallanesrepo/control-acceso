<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login_model extends CI_Model {
      

 protected $table = 'users';
	
    public function __construct() {
        parent::__construct();

    }






public function get_user($user_email,$user_password)
        {
           /* $data = array (

                'user_email'=> $this -> input -> post('username'),
                'user_password'=> $this -> input -> post('password')
              





            );*/
        $this->db->where('user_email', $user_email);
        $this->db->where('user_password', $user_password);
         $test =  $this->db->get('users', $data);

         if ($test->num_rows()>0) {


$row = $test->row();

$ipaddress = $_SERVER['REMOTE_ADDR'];
$conndate = date('Y-m-d');
$conntime = date("H:i:s");

$sess_data = array(

'usid' => $row->user_id,
'name' => $row->user_name,
'lastname' => $row->user_lastname,
'email' => $row->user_email,
'status' => $row->user_status,
'level' => $row->user_level,
'registre_date' => $row->user_registre_date,
'editdate' => $row->user_edit_date,
'ipaddress' => $ipaddress,
'conndate' => $conndate,
'conntime' => $conntime




);

$this->session->set_userdata($sess_data);



         	return true;
         }
         else
         	{
         	 return false; 
         	}


        }




}