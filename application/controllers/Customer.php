<?php
class Customer extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('user');
	}

	public function index($page="home"){
		$data['title'] = ucfirst($page);
		$this->load->view('templates/header', $data);
		$this->load->view('login/'.$page, $data);
		$this->load->view('templates/footer', $data);
	}

	public function logOut(){
		$this->session->sess_destroy();
		header("Location:".base_url("index.php/"));
	}
	
}