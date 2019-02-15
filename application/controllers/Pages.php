<?php
class Pages extends CI_Controller {

	public function view($page = 'home'){

		if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
		{
			show_404();
		}else{
			if ($this->session->has_userdata("access_level")) {
				switch ($this->session->access_level) {
					case 'admin':
					$this->session->set_flashdata('acces_success','Login success');
					header("Location:".base_url("index.php/Admin/index"));
					break;
					case 'customer':
					$this->session->set_flashdata('acces_success','Login success');
					header("Location:".base_url("index.php/Customer/index"));
					break;
				}
			}else{
				header("Location:".base_url("index.php/Login/index"));
			}
		}
	}
}

