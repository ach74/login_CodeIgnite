<?php


class User extends CI_Model{
	


    private $conn;
    private $table_name = "users";

    
	private $id;
	private $firstname;
	private $lastname;
	private $email;
	private $contact_number;
	private $address;
	private $password;
	private $access_level;
	private $access_code;
	private $status;
	private $created;
    private $modified;

	function __construct()
	{
		parent::__construct();
		//$this->load->database();
	}

	public function get_email(){
		return $this->email;
	}

	public function set_email($set_email){
		$this->email = $set_email;
	}


}

