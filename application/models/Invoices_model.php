<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Invoices_model extends CI_Model {
      

    protected $table = 'invoices';
    protected $table2 = 'users';
    protected $table3 = 'concepts';
    protected $table4 = 'cuotas';
    protected $table5 = 'invoices_pack';
    public function __construct() {
        parent::__construct();

    }

    public function get_count() {
        return $this->db->count_all($this->table5);

/*$this->db->distinct();
    $this->db->group_by('inv_number');

    $query = $this->db->get($this->table);

    return $query->num_rows(); */


    }

    public function get_invoices($limit, $start) {
        $this->db->limit($limit, $start);

        $query = $this->db->get($this->table5);

        return $query->result();
    }
 public function get_user() {
      //  $this->db->limit($limit, $start);
        $query_ = $this->db->get($this->table2);

        return $query_->result();
    }

 public function get_concepts() {
      //  $this->db->limit($limit, $start);
        $this->db->where('type', 'Mensual');
        $query__ = $this->db->get($this->table3);

        return $query__->result();
    }
 public function get_aliq1() {
      //  $this->db->limit($limit, $start);
        $this->db->where('id', '1');
        $query__1 = $this->db->get($this->table4);

        return $query__1->result();
/*$items = array();
        $queryconc1 = $this->db->query('SELECT * FROM concepts WHERE type="Mensual"');

        foreach ($queryconc1->result() as $rowconc1)
        {
            $queryaliq1 = $this->db->query('SELECT * FROM cuotas WHERE id="1"');
                   foreach ($queryaliq1->result() as $rowaliq1)
                     
                     {

                         $aliq_realval = $rowconc1->price*$rowaliq1->valor;
                         $realprice = $aliq_realval+$rowconc1->price;
                          $items[] = $realprice;
                      }

        }
return $items;*/
    }


    public function get_aliq2() {
      //  $this->db->limit($limit, $start);
        $this->db->where('id', '2');
        $query__2 = $this->db->get($this->table4);

        return $query__2->result();
/*$items = array();
        $queryconc1 = $this->db->query('SELECT * FROM concepts WHERE type="Mensual"');

        foreach ($queryconc1->result() as $rowconc1)
        {
            $queryaliq1 = $this->db->query('SELECT * FROM cuotas WHERE id="1"');
                   foreach ($queryaliq1->result() as $rowaliq1)
                     
                     {

                         $aliq_realval = $rowconc1->price*$rowaliq1->valor;
                         $realprice = $aliq_realval+$rowconc1->price;
                          $items[] = $realprice;
                      }

        }
return $items;*/
    }


 

      public function createinvoice()
        {
          /*  $data = array (

                'concept_name'=> $this -> input -> post('name'),
                 'price'=> $this -> input -> post('price'),
                 'type'=> $this -> input -> post('concept_type')
            );*/
/*
$this->db->select('*');    
$this->db->from('residence');
$this->db->join('table2', 'table1.id = table2.id');
$this->db->join('table3', 'table1.id = table3.id');
$query = $this->db->get();*/

$query2 = $this->db->query('SELECT * FROM control');
foreach ($query2->result() as $row2)
{


$invoice_id=$row2->invoice_id;
$invoice_id=$invoice_id+1;
}

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



$sql = "INSERT INTO invoices (invoice_id, concept, aliquot, residence, price, inv_number, generation_date, month, year, due_date, owner, invoice_type) VALUES (".$this->db->escape('').", ".$this->db->escape('').", ".$this->db->escape('').", ".$this->db->escape($row->apt_number).", ".$this->db->escape('555000').", ".$this->db->escape($invoice_id).", ".$this->db->escape(date('Y-m-d')).", ".$this->db->escape('Agosto').", ".$this->db->escape('2020').", ".$this->db->escape('2020-08-15').", ".$this->db->escape($row->id_owner).", ".$this->db->escape('1').")";
$this->db->query($sql);
//echo $this->db->affected_rows();



$query4 = $this->db->query('SELECT * FROM concepts WHERE type="Mensual"');
foreach ($query4->result() as $row4)
{


$query5 = $this->db->query("SELECT * FROM cuotas WHERE id='$row->aliquot'");
foreach ($query5->result() as $row5)
{

$aliq_value=$row5->valor;

}



/*$this->db->select("( SELECT SUM(price) FROM invoices_detail WHERE invoice_id='$invoice_id' and residence='$row->id') AS pricesum");
$query6 = $this->db->get('invoices_detail');
echo$pricesum;*/


$sql2 = "INSERT INTO invoices_detail (invoice_id, concept, aliquot, residence, price, inv_number, generation_date, month, year, due_date, owner, invoice_type) VALUES (".$this->db->escape('').", ".$this->db->escape($row4->concept_name).", ".$this->db->escape($row5->valor).", ".$this->db->escape($row->apt_number).", ".$this->db->escape($row4->price).", ".$this->db->escape($invoice_id).", ".$this->db->escape(date('Y-m-d')).", ".$this->db->escape('Agosto').", ".$this->db->escape('2020').", ".$this->db->escape('2020-08-15').", ".$this->db->escape($row->id_owner).", ".$this->db->escape('1').")";
$this->db->query($sql2);

}

$query6 = $this->db->query("SELECT SUM(price) as pricesum from invoices_detail where `inv_number`=$invoice_id and `residence`=$row->id");
foreach ($query6->result() as $row6)
{


$row6->pricesum;
$conceptsum=$row6->pricesum;
$aliq=$conceptsum*$aliq_value;
$total=$aliq+$conceptsum;
}













$query7 = "UPDATE invoices SET price='$total' WHERE inv_number=$invoice_id and `residence`=$row->id";
$this->db->query($query7);




}



$sql100 = "INSERT INTO invoices_pack (invoice_id, concept, aliquot, residence, price, inv_number, generation_date, month, year, due_date, owner, invoice_type) VALUES (".$this->db->escape('').", ".$this->db->escape('').", ".$this->db->escape('').", ".$this->db->escape('').", ".$this->db->escape('').", ".$this->db->escape($invoice_id).", ".$this->db->escape(date('Y-m-d')).", ".$this->db->escape('Agosto').", ".$this->db->escape('2020').", ".$this->db->escape('2020-08-15').", ".$this->db->escape('').", ".$this->db->escape('1').")";
$this->db->query($sql100);




$query3 = "UPDATE control SET invoice_id='$invoice_id'";
$this->db->query($query3);

           // $this->db->insert('concepts', $data);
               

            /*$this->load->view('headerview');
                $this->load->view('banksview');
            $this->load->view('footerview');*/
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