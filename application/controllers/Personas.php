<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Personas extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Personas_Model');
	}

	public function index()
	{
		$data['title'] = 'Personas';
		$data['personas'] = $this->Personas_Model->listall();
		$this->load->view('layouts/header', $data);
		$this->load->view('personas/index');
		$this->load->view('layouts/footer');
	}

	public function new()
	{
		$data['title'] = 'Nuevas Personas';
		$this->load->view('layouts/header', $data);
		$this->load->view('personas/new');
		$this->load->view('layouts/footer');
	}

	public function save()
	{
		$data = array(
			'nombre' => $this->input->post('nombre'),
			'apellidos' => $this->input->post('apellidos'),
			'email' => $this->input->post('email'),
			'telefono' => $this->input->post('telefono'),
			'edad' => $this->input->post('edad'),
		);

		$this->Personas_Model->guardar($data);
	}

	public function edit()
	{
		$this->load->view('personas/edit',$data);
	}

	public function update()
	{
		echo "sad";
	}

	public function show()
	{
		$this->load->view('personas/show');
	}

	public function delete()
	{
		$this->Personas_Model->delete($this->input->get('id'));
	}

}

/* End of file Personas.php */
/* Location: ./application/controllers/Personas.php */