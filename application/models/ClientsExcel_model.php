<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ClientsExcel_model extends CI_Model {

	protected $table = 'client';

	public function get_clients() {
		$query = $this->db->get($this->table);
        return $query->result();

	}

	public function get_clients_and_invoices() {
		$query = $this->db->query("SELECT * FROM client inner join invoices on client.client_id = invoices.client_id");

		return $query->result();
	}
}

?>