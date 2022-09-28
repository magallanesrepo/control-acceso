<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Users_model extends CI_Model {
      

    protected $table = 'users';

    public function __construct() {
        parent::__construct();

    }

    public function get_count() {
        return $this->db->count_all($this->table);
    }

    public function get_users($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get($this->table);

        return $query->result();
    }


      public function createUser()
        {
            $data = array (

                'user_name'=> $this -> input -> post('name'),
                 'user_lastname'=> $this -> input -> post('lname'),
                 'user_email'=> $this -> input -> post('email'),
                 'user_password'=> $this -> input -> post('pass'),
                 'user_status'=> "Activo",
                 'user_level'=> $this -> input -> post('level'),
                 'registre_date'=> date('Y-m-d')." ".date('H:i:s')





            );
            $this->db->insert('users', $data);
               

            /*$this->load->view('headerview');
                $this->load->view('banksview');
            $this->load->view('footerview');*/
        }



      public function updateUser()
        {   

            $id =  $this-> input ->post('user_id');
            $data = array (

                'user_name'=> $this -> input -> post('user_name'),
                 'user_lastname'=> $this -> input -> post('user_lastname'),
                 'user_password'=> $this -> input -> post('user_password'),
                 'user_status'=> $this -> input -> post('user_status'),
                 'user_level'=> $this -> input -> post('user_level'),
                 'user_email'=> $this -> input -> post('user_email')
             
                 





            );

            $query = "update users set user_name = '$data[user_name]', user_lastname = '$data[user_lastname]', user_password = '$data[user_password]', user_status = '$data[user_status]', user_level = '$data[user_level]', user_email = '$data[user_email]' where user_id = '$id'";

            $this->db->query($query);
            
            /*$this->db->where('id', $id);
            $this->db->update('users', $data);*/
               

            /*$this->load->view('headerview');
                $this->load->view('banksview');
            $this->load->view('footerview');*/
           // echo"<p>Record Updated</p>";
        }
     


    /*  public function deleteConcept($id)
        {
            $data = array (

               // 'concept_name'=> $this -> input -> post('name'),
               //  'price'=> $this -> input -> post('price')





            );
            $this->db->where('concept_id', $id);
            $this->db->delete('concepts');
               

          
        }*/
     






}