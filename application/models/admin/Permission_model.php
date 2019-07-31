<?php
	class Permission_model extends CI_Model
	{
		public function __construct()
		{
			parent::__construct();
		}
	
		function permission()
		{
					
			$sess_data = $this->session->userdata('logged_in');
			//$permission_decode = json_decode($sess_data['permission']);
			//if($sess_data && $permission_decode->users == '1')
			$permission_decode = 1;
		    if($sess_data && $permission_decode == '1')
			{
				return true;
			}
			else
			{
				return false;
			}
			
			
		}
		
	}
	
	
	
?>