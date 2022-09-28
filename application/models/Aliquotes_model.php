<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Aliquotes_model extends CI_Model {
      

    protected $table = 'cuotas';

    public function __construct() {
        parent::__construct();

    }

    public function get_count() {
        return $this->db->count_all($this->table);
    }

    public function get_aliquotes($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get($this->table);

        return $query->result();
    }


      public function createAliquote()
        {
            $data = array (

                'nombre'=> $this -> input -> post('name'),
                 'valor'=> $this -> input -> post('valor'),
                 'registre_date'=> date('Y-m-d')." ".date('H:i:s')





            );
            $this->db->insert('cuotas', $data);
               

            /*$this->load->view('headerview');
                $this->load->view('banksview');
            $this->load->view('footerview');*/
        }



      public function updateAliquote($id)
        {
            $data = array (

                'nombre'=> $this -> input -> post('nombre'),
                 'valor'=> $this -> input -> post('tasa'),
                 





            );
            $this->db->where('id', $id);
            $this->db->update('cuotas', $data);
               

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