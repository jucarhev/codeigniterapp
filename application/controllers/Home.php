<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Home_model');
	}

	public function index(){
		$data = array("title"=>"Home");

		$this->load->view("layouts/header",$data);
		$this->load->view('home/home');
		$this->load->view("layouts/footer");
	}

	public function sign_in(){
		$data = array("title"=>"Inicio de session");

		$this->load->view("layouts/header",$data);
		$this->load->view('home/login');
		$this->load->view("layouts/footer");
	}

	public function login(){
		$email = $this->input->post("email");
		$password = $this->input->post("password");

		$res = $this->Home_model->login($email,sha1($password));

		if (!$res) {
			redirect(base_url()."home/sign_in");
		}else{
			$data = array(
							'id' => $res->id,
							'email'=> $res->email,
							'level'=>$res->level,
							'status'=>$res->status,
							'login'=>TRUE,
						);
			$this->session->set_userdata($data);
			redirect(base_url()."home");

		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
	}
}
