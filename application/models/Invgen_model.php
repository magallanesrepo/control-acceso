<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Concepts_model extends CI_Model {
      

    protected $table = 'concepts';

    public function __construct() {
        parent::__construct();

    }

    public function get_count() {
        return $this->db->count_all($this->table);
    }

    public function get_concepts($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get($this->table);

        return $query->result();
    }


      public function createConcept()
        {
            $data = array (

                'concept_name'=> $this -> input -> post('name'),
                 'price'=> $this -> input -> post('price'),
                 'type'=> $this -> input -> post('concept_type')





            );
            $this->db->insert('concepts', $data);
               

            /*$this->load->view('headerview');
                $this->load->view('banksview');
            $this->load->view('footerview');*/
        }



      public function updateConcept($id)
        {
            $data = array (

                'concept_name'=> $this -> input -> post('name'),
                 'price'=> $this -> input -> post('price'),
                 'type'=> $this -> input -> post('concept_type'),
                 'status'=> $this -> input -> post('status'),
                 'edit_date'=> date('Y-m-d')." ".date('H:i:s')





            );
            $this->db->where('concept_id', $id);
            $this->db->update('concepts', $data);
               

            /*$this->load->view('headerview');
                $this->load->view('banksview');
            $this->load->view('footerview');*/
           // echo"<p>Record Updated</p>";
        }
     


      public function deleteConcept($id)
        {
            $data = array (

               // 'concept_name'=> $this -> input -> post('name'),
               //  'price'=> $this -> input -> post('price')





            );
            $this->db->where('concept_id', $id);
            $this->db->delete('concepts');
               

            /*$this->load->view('headerview');
                $this->load->view('banksview');
            $this->load->view('footerview');*/
           // echo"<p>Record Updated</p>";
        }
     






}