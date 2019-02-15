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
			if ($this->user->exist_email() && password_verify($this->input->post("password"), $this->user->get_password()) && $this->user->get_status()=="1"){
				if ($this->user->get_access_level()=="Admin") {
					$this->session->set_userdata('access_level','admin');
					header("Location:".base_url());
				}else{
					$this->session->set_userdata('access_level','customer');
					header("Location:".base_url());
				}
			}else{
				$this->session->set_flashdata('acces_error', 'Please Again');
				header("Location:".base_url("index.php/Login/index"));
			}
		}
	}

	public function sign_Up($page="sign_up"){

		if($_POST){

			$this->user->set_email($_POST['email']);

			if ($this->user->exist_email()) {
				$this->session->set_flashdata('exist_email','This email exist');
			}else{
				$todo = elements(array('firstname', 'lastname', 'address',"contact_number","password","email"), $_POST);
				$this->user->set_sign_Up($todo);
			}
		}

		$data['title'] = ucfirst($page);
		$this->load->view('templates/header', $data);
		$this->load->view('login/'.$page, $data);
		$this->load->view('templates/footer', $data);
	}


	public function forgot_password(){
		echo "Forgot_password";
	}
}