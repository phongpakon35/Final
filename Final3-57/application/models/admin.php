<?php                																	

class Admin extends CI_model        
{
	function __construct()
	{
		$this->load->database();
		parent::__construct();
	}


	var $id;
	var $username; 
	var $password; 

	

	public function setId($id)
	{
		$this->id = $id;
	}

	public function getId()
	{
		return $this->id;
	}

	public function setUsername($username)
	{
		$this->username = $username;
	}

	public function getUsername()
	{
		return $this->username;
	}
		public function setPassword($password)
	{
		$this->password = $password;
	}

	public function getPassword()
	{
		return $this->password;
	}


	

	public function checkLogin()
	{
		$sql = sprintf
			('
				SELECT id FROM admin WHERE username = "%s" AND password = "%s"',
				$this->getUsername(),
				$this->getPassword()
			);
			
			$query = $this->db->query($sql);

		return $query->num_rows();
	}

}
?>