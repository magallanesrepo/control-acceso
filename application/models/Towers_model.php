<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cardsprinta_model extends CI_Model {
      

    protected $table = 'cards';

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

        public function get_specificcards() {
       /* $this->db->limit($limit, $start);
        $query = $this->db->get($this->table);

        return $query->result();*/


           $sqlusr = "SELECT currentinvoice FROM users WHERE user_id = '".$this->session->userdata('usid')."')";
$currentinvoice=$this->db->query($sqlusr);


            $sqlci = "SELECT * FROM cards WHERE currentinvoice = '$currentinvoice')";
$data=$this->db->query($sqlci);

return $data;

    }


      public function createcards()
        {
            $data = array (

                'name'=> $this -> input -> post('name'),
             





            );
            $this->db->insert('towers', $data);
               

            /*$this->load->view('headerview');
                $this->load->view('banksview');
            $this->load->view('footerview');*/
        }



      public function updateTower($id)
        {
            $data = array (

                'name'=> $this -> input -> post('name'),
                 'status'=> $this -> input -> post('status'),
                 'edit_date'=> date('Y-m-d')." ".date('H:i:s')





            );
            $this->db->where('tower_id', $id);
            $this->db->update('towers', $data);
               

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