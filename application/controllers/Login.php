<?php
class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('user');
	}

	public function index($page="Login")
	{
		$data['title'] = ucfirst($page);
		$this->load->view('templates/header', $data);
		$this->load->view('login/'.$page, $data);
		$this->load->view('templates/footer', $data);
	}

	public function post_login(){
		if ($this->input->post()) {		
			$this->user->set_email($this->input->post('email'));
			echo $this->user->get_email();
		}
	}
}