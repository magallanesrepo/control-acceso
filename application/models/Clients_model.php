<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Clients_model extends CI_model {


  protected $table = 'client';


	
    public function __construct() {
        parent::__construct();

    }

       public function get_count() {
        return $this->db->count_all($this->table);
    }


  public function get_clients($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get($this->table);

        return $query->result();
    }




        public function createClient()
        {
            $data = array (

                'client_name'=> strtoupper($this -> input -> post('client_name')),
                    'client_lastname'=> strtoupper($this -> input -> post('client_lastname')),
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




public function updateClient()

        
        {


            $id =  $this-> input ->post('client_id');
            $data = array (

                'name'=> $this -> input -> post('name'),
                'lastname'=> $this -> input -> post('lastname'),
                'cedula'=> $this -> input -> post('cedula'),
                'birthdate'=> $this -> input -> post('birthdate'),
                'address'=> $this -> input -> post('address'),
                'childrenQty'=> $this -> input -> post('childrenQty'),
                'grandchildrenQty'=> $this -> input -> post('grandchildrenQty'),
                'phone'=> $this -> input -> post('phone'),
                'email'=> $this -> input -> post('email'),
                'work'=> $this -> input -> post('work'),
                'idtype'=> $this -> input -> post('idtype')
              





            );

            $query = "update client set client_name = '$data[name]', client_lastname = '$data[lastname]', cedularif = '$data[cedula]', birthdate = '$data[birthdate]', address = '$data[address]', children_qty = '$data[childrenQty]', grandchildren_qty = '$data[grandchildrenQty]', phone = '$data[phone]', email = '$data[email]', work = '$data[work]', idtype = '$data[idtype]' where client_id = '$id'";

            $this->db->query($query);

            /*
            $this->db->where('client_id', $id);
            $this->db->update('clients', $data);*/
               

            /*$this->load->view('headerview');
                $this->load->view('banksview');
            $this->load->view('footerview');*/
           // echo"<p>Record Updated</p>";
        }





         public function deleteClient($id)
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