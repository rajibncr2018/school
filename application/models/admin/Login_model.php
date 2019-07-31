<?php
	class Login_model extends CI_Model
	{
		public function __construct()
		{
			parent::__construct();
		}
	
		function login($username, $password)
		{
			$ip_address = $_SERVER["REMOTE_ADDR"];
			$browser = $_SERVER['HTTP_USER_AGENT'] . "\n\n";				
			$browserArr = explode(" ",$browser);
			$browser = $browserArr[0]; 
			
			$this -> db -> select('*');
			$this -> db -> from('admin');
			$this -> db -> where('username', $username);
			$this -> db -> where('password', $password);
			$this -> db -> where('status','1');
			$this -> db -> limit(1);
			$query = $this -> db -> get();
			//echo $this->db->last_query();exit;
			if($query -> num_rows()>0)
			{
				$form_data=array(	 
				'username' => $username,
				'browser' => $browser,
				'ip' => $ip_address,
				'status' => '1'
				);
				$queryInsert=$this->db->insert('accesslog', $form_data);
				return $query->result();
			}
			else
			{
				return false;
			}
		}
		
		function register_login_user($username, $password)
		{
			$this->db->select('*');
			$this->db->from('register_user');
			$this->db->where('email', $username);
			$this->db->where('password', $password);
			$this->db->where('login_user_status','1');
			$this->db->limit(1);
			$query = $this->db->get();
			//echo $this->db->last_query();exit;
			if($query -> num_rows()>0)
			{
				return $query->result();
			}
			else
			{
				return false;
			}
		}
		
		
	}
	
	
	
?>