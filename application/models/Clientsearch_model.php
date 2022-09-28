<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Clientsearch_model extends CI_model {


  protected $table = 'client';


	
    public function __construct() {
        parent::__construct();

    }

       public function get_count() {
        return $this->db->count_all($this->table);
    }

/*
  public function get_banks($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get($this->table);

        return $query->result();
    }*/

      public function getClient() {
        
        $query = $this->db->get($this->table);

        return $query->result();
    }

  public function takeClient() {
        
        $data = array (

                'currentclient'=> $this -> input -> post('currentclient')
              





            );
            $this->db->where('user_id', $this->session->userdata('usid'));
            $this->db->update('users', $data);
               
    }




        public function createClient()
        {
        	$data = array (

        		'client_name'=> $this -> input -> post('client_name'),
                    'client_lastname'=> $this -> input -> post('client_lastname'),
                        'cedularif'=> $this -> input -> post('cedularif'),
                            'birthdate'=> $this -> input -> post('birthdate'),
                                'address'=> $this -> input -> post('address'),
                                    'children_qty'=> $this -> input -> post('children_qty'),
                                     'grandchildren_qty'=> $this -> input -> post('grandchildren_qty'),
                                        'phone'=> $this -> input -> post('phone'),
                                            'email'=> $this -> input -> post('email'),
                                                'work'=> $this -> input -> post('work'),
                                                'idtype'=> $this -> input -> post('idtype')
                                                   




        	);
        	$this->db->insert('client', $data);
               

            /*$this->load->view('headerview');
                $this->load->view('banksview');
            $this->load->view('footerview');*/
        }




public function updateBank($id)
        {
            $data = array (

                'name'=> $this -> input -> post('name')
              





            );
            $this->db->where('bank_id', $id);
            $this->db->update('banks', $data);
               

            /*$this->load->view('headerview');
                $this->load->view('banksview');
            $this->load->view('footerview');*/
           // echo"<p>Record Updated</p>";
        }





         public function deleteBank($id)
        {
            $data = array (

               // 'concept_name'=> $this -> input -> post('name'),
               //  'price'=> $this -> input -> post('price')





            );
            $this->db->where('bank_id', $id);
            $this->db->delete('banks');
               

            /*$this->load->view('headerview');
                $this->load->view('banksview');
            $this->load->view('footerview');*/
           // echo"<p>Record Updated</p>";
        }
     









}

?>