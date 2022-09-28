<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Manualinv_model extends CI_Model {
      

    protected $table = 'invoices';
    protected $table2 = 'users';

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



    public function get_user() {
      //  $this->db->limit($limit, $start);
        $query_ = $this->db->get($this->table2);

        return $query_->result();
    }



      public function createinvoice()
        {
         

 $data = array (

                'concept'=> $this -> input -> post('concept'),
                 'price'=> $this -> input -> post('price'),
                'observations'=> $this -> input -> post('observations'),


            );
/* tomando el numero de la factura from control*/
$query2 = $this->db->query('SELECT * FROM control');
foreach ($query2->result() as $row2)
{


$invoice_id=$row2->invoice_id;

//incremenando el numero de  factura

$invoice_id=$invoice_id+1;
}


/*Tomando datos de la residencia*/
$query = $this->db->query('SELECT * FROM residence');

foreach ($query->result() as $row)
{
        $row->id;
        $row->tower;
        $row->id_owner;
        $row->apartment;
        $row->apt_number;
        $row->aliquot;
        $row->level;

//insertando todo en invoices header
$sql = "INSERT INTO invoices (invoice_id, concept, aliquot, residence, price, inv_number, generation_date, month, year, due_date, owner, invoice_type) VALUES (".$this->db->escape('').", ".$this->db->escape($data['concept']).", ".$this->db->escape('').", ".$this->db->escape($row->apt_number).", ".$this->db->escape($data['price']).", ".$this->db->escape($invoice_id).", ".$this->db->escape(date('Y-m-d')).", ".$this->db->escape('Agosto').", ".$this->db->escape('2020').", ".$this->db->escape('2020-08-15').", ".$this->db->escape($row->id_owner).", ".$this->db->escape('2').")";
$this->db->query($sql);


/* insertando en inv detalle */
$sql2 = "INSERT INTO invoices_detail (invoice_id, concept, aliquot, residence, price, inv_number, generation_date, month, year, due_date, owner, invoice_type) VALUES (".$this->db->escape('').", ".$this->db->escape($data['concept']).", ".$this->db->escape('').", ".$this->db->escape($row->apt_number).", ".$this->db->escape($data['price']).", ".$this->db->escape($invoice_id).", ".$this->db->escape(date('Y-m-d')).", ".$this->db->escape('Agosto').", ".$this->db->escape('2020').", ".$this->db->escape('2020-08-15').", ".$this->db->escape($row->id_owner).", ".$this->db->escape('2').")";
$this->db->query($sql2);



}

$sql100 = "INSERT INTO invoices_pack (invoice_id, concept, aliquot, residence, price, inv_number, generation_date, month, year, due_date, owner, invoice_type) VALUES (".$this->db->escape('').", ".$this->db->escape('').", ".$this->db->escape('').", ".$this->db->escape('').", ".$this->db->escape('').", ".$this->db->escape($invoice_id).", ".$this->db->escape(date('Y-m-d')).", ".$this->db->escape('').", ".$this->db->escape('2020').", ".$this->db->escape('2020-08-15').", ".$this->db->escape('').", ".$this->db->escape('2').")";
$this->db->query($sql100);



$query3 = "UPDATE control SET invoice_id='$invoice_id'";
$this->db->query($query3);

        }








      public function createOtherinvoice()
        {
         

 $data = array (
                'owner'=> $this -> input -> post('owner'),
                'concept'=> $this -> input -> post('concept'),
                 'price'=> $this -> input -> post('price'),
                'observations'=> $this -> input -> post('observations'),


            );



/* tomando el numero de la factura from control*/
$query2 = $this->db->query('SELECT * FROM control');
foreach ($query2->result() as $row2)
{


$invoice_id=$row2->invoice_id;

//incremenando el numero de  factura

$invoice_id=$invoice_id+1;
}

//insertando todo en invoices header
$sql = "INSERT INTO invoices (invoice_id, concept, aliquot, residence, price, inv_number, generation_date, month, year, due_date, owner, invoice_type, observations) VALUES (".$this->db->escape('').", ".$this->db->escape($data['concept']).", ".$this->db->escape('').", ".$this->db->escape('').", ".$this->db->escape($data['price']).", ".$this->db->escape($invoice_id).", ".$this->db->escape(date('Y-m-d')).", ".$this->db->escape('Agosto').", ".$this->db->escape('2020').", ".$this->db->escape('2020-08-15').", ".$this->db->escape($data['owner']).", ".$this->db->escape('3').", ".$this->db->escape($data['observations']).")";
$this->db->query($sql);


/* insertando en inv detalle */
$sql2 = "INSERT INTO invoices_detail (invoice_id, concept, aliquot, residence, price, inv_number, generation_date, month, year, due_date, owner, invoice_type) VALUES (".$this->db->escape('').", ".$this->db->escape($data['concept']).", ".$this->db->escape('').", ".$this->db->escape('').", ".$this->db->escape($data['price']).", ".$this->db->escape($invoice_id).", ".$this->db->escape(date('Y-m-d')).", ".$this->db->escape('Agosto').", ".$this->db->escape('2020').", ".$this->db->escape('2020-08-15').", ".$this->db->escape($data['owner']).", ".$this->db->escape('3').")";
$this->db->query($sql2);


$sql100 = "INSERT INTO invoices_pack (invoice_id, concept, aliquot, residence, price, inv_number, generation_date, month, year, due_date, owner, invoice_type) VALUES (".$this->db->escape('').", ".$this->db->escape('').", ".$this->db->escape('').", ".$this->db->escape('').", ".$this->db->escape('').", ".$this->db->escape($invoice_id).", ".$this->db->escape(date('Y-m-d')).", ".$this->db->escape('').", ".$this->db->escape('2020').", ".$this->db->escape('2020-08-15').", ".$this->db->escape('').", ".$this->db->escape('3').")";
$this->db->query($sql100);



$query3 = "UPDATE control SET invoice_id='$invoice_id'";
$this->db->query($query3);



        }










/*

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
      /*  }
     
*/
/*
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
      /*  }
     
*/





}