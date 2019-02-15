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
		$this->load->database();
	}

	public function get_access_level(){
		return $this->access_level;
	}
	public function get_email(){
		return $this->email;
	}

	public function set_email($set_email){
		$this->email = $set_email;
	}

	public function get_password(){
		return $this->password;
	}

	public function set_password($set_password){
		$this->password = $set_password;
	}

	public function get_status(){
		return $this->status;
	}

	public function exist_email(){
		if (isset($this->email)) {
			$query = $this->db->query("SELECT * FROM " . $this->table_name . " WHERE email = '".$this->email."';");
			foreach ($query->result() as $row){
				$this->id = $row->id;
				$this->firstname = $row->firstname;
				$this->lastname = $row->lastname;
				$this->email = $row->email;
				$this->password = $row->password;
				$this->access_level = $row->access_level;
				$this->access_code = $row->access_code;
				$this->status = $row->status;
				return true;
			}
		}
		return false;
	}

	public function set_sign_Up($data){
		extract($data);
		$this->firstname = $firstname;
		$this->lastname = $lastname;
		$this->password = password_hash($password, PASSWORD_BCRYPT);
		$this->access_level = "customer";
		$this->access_code = 0;
		$this->status = 0;

		$this->id = $this->db->count_all_results('users')+21;
		$data["id"] = $this->id;

		//Fecha de creacion	
		$this->created=date('Y-m-d H:i:s');
		$data["created"] = $this->created;
		$this->db->insert("users",$data);
	}

	public function read_all(){

		$query = $this->db->query("SELECT id,firstname,lastname,email,contact_number,access_level,created FROM " . $this->table_name . " ORDER BY id DESC");

		foreach ($query->result() as $row)
		{
			echo $row->id;
			echo $row->firstname;
			echo $row->lastname;
			echo $row->email;
			echo $row->contact_number;
			echo $row->access_level;

		}


	}



}

