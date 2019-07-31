<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
    class Admin_model extends CI_Model 
	{
		public $_tbl_users = 'tbl_users';
		
		function __construct() {
			//load the parent constructor
			parent::__construct();
		}
		
         /**
			* -----------------------------------------
			* @Description : Change Password
			* ----------------------------------------
			* @param       : table(string/table name)
			* @param       : param(array/add data array)
			* @return      : one row effect
			* 
		*/
        
		function admin_update_password($data = array(), $admin_id = "")
		{
			$this->db->where('id',$admin_id);
			$update = $this->db->update($_tbl_users,$data);
			return $update;
		}
		
		
 
        
	}			