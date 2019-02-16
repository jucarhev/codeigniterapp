<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Personas_Model extends CI_Model {

	public function guardar($data)
	{
		$this->db->insert('personas', $data);
	}

	public function listall()
	{
		return $this->db->get('personas');
	}

	public function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('personas');
	}

}

/* End of file Personas_Model.php */
/* Location: ./application/models/Personas_Model.php */