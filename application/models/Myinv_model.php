<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Myinv_model extends CI_model {


  protected $table = 'invoices';
  protected $table2 = 'banks';
  protected $table3 = 'payment_registration';
	
    public function __construct() {
        parent::__construct();
        $this->load->library('session');

    }

       public function get_count($uss) {
      /* $this->db->where('owner', $uss);
        return $this->db->count_all($this->table);*/
        $this->db->select('*');
$this->db->from('invoices');
$this->db->where('owner',$uss);
$query = $this->db->get();

return $query->num_rows();
    }


  public function get_inv($limit, $start, $uss) {
       $this->db->where('owner', $uss);
        $this->db->limit($limit, $start);

        $query = $this->db->get($this->table);

        return $query->result();
    }


 public function get_banks() {


        $querybanks = $this->db->get($this->table2);

        return $querybanks->result();
    }




 /*public function get_payreg_invnumb($owner) {

$items = array();


    $queryinv = $this->db->query("SELECT * FROM invoices WHERE owner='$owner'");

    foreach ($queryinv->result() as $rowinv)
    {

                  $queryreg = $this->db->query("SELECT * FROM payment_registration WHERE invoice_number='$rowinv->inv_number'");

                        foreach ($queryreg->result() as $rowreg)
                        {


                            $items[] = $rowreg->invoice_number;


                        }





    }





return $items;

    }*/



 public function get_payreg_confirmed($owner) {

      
        
        $this->db->select('invoice_number');
        $this->db->where('owner', $owner);
        $this->db->where('confirmed', 'Si');
        $query2 = $this->db->get($this->table3);



        //$query->result();
       // $query2->result();

        return $query2->result();
                        

    }


 public function get_payreg_notconfirmed($owner) {

        $this->db->select('invoice_number');
        $this->db->where('owner', $owner);
       // $this->db->limit($limit, $start);
        $this->db->where('confirmed', 'No');
        $query = $this->db->get($this->table3);



        //$query->result();
       // $query2->result();

        return  $query->result();
                       

    }



















        public function registerPayment()
        {
        	$data = array (

        		'invoice_number'=> $this -> input -> post('inv_number'),
                'pay_date'=> $this -> input -> post('pay_date'),
               
                'bank_from'=> $this -> input -> post('sending_bank'),
                'bank_to'=> $this -> input -> post('receiving_bank'),
                 'reference'=> $this -> input -> post('reference'),
                'method'=> $this -> input -> post('method'),
                'observations'=> $this -> input -> post('observations')





        	);
        	$this->db->insert('payment_registration', $data);
               

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