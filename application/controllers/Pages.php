<?php
class Pages extends CI_Controller {

	public function view($page = 'home'){

		$this->load->helper('url');
		$this->load->library("session");

		if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
		{
			show_404();
		}else{


			if ($this->session->has_userdata("access_level")) {
				switch ($this->session->access_level) {
					case 'Admin':
					echo "Eres Admin";
					break;

					case 'Customer':
					echo "Eres Customer";
					break;
				}
			}else{

				//echo base_url("Login/index");

				//header("Location: {base_url()}login.php?action=please_login");

				header("Location:".base_url("index.php/Login/index"));

			}

/*
			$data['title'] = ucfirst($page);
			$this->load->view('templates/header', $data);
			$this->load->view('pages/'.$page, $data);
			$this->load->view('templates/footer', $data);
			*/
		}
	}
}

