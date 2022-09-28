<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Banks_model extends CI_model {


  protected $table = 'banks';


	
    public function __construct() {
        parent::__construct();

    }

       public function get_count() {
        return $this->db->count_all($this->table);
    }


  public function get_banks($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get($this->table);

        return $query->result();
    }




        public function createBank()
        {
        	$data = array (

        		'name'=> $this -> input -> post('name')





        	);
        	$this->db->insert('banks', $data);
               

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