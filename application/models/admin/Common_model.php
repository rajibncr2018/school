<?php
	
	class Common_model extends CI_Model {
		
		function __construct() {
			//load the parent constructor
			parent::__construct();
		}
		
		/**
			* -----------------------------------------
			* @Description : fetch data from table based on conditions
			* ----------------------------------------
			* @param       : table(string/table name)
			* @param       : where(array/where condition array)
			* @param       : select(string)
			* @param       : join(array/join format array('table'=>array(),'on'=>array(),'type'=>array()))
			* @param       : page(int/ page number)
			* @param       : page_size(int/number per page)
			* @param       : order_by(string)
			* @param       : order(ASC/DESC)
			* @return      : result_array
			* 
		*/
		public function Select($table = '', $where = array(), $select = '', $join = array(), $page = 0, $page_size = 0, $order_by='', $order='')
		{  
			if(empty($select)){
				$this->db->select('*');
				}else{
				$this->db->select($select);
			}
			
			if(!empty($join)){
				foreach($join['table'] as $key => $j){
					$this->db->join($join['table'][$key], $join['on'][$key], $join['type'][$key]);
				}
			}
			
			if(!empty($where)){
				$this->db->where($where);
			}
			
			if(!empty($page) && !empty($page_size)){
				$limit = $page_size;
				$offset = $limit*($page-1);
				$this->db->limit($limit, $offset);
			}
			
			if($order_by && $order){
				$this->db->order_by($order_by, $order);
			}
			
			$result = $this->db->get($table)->result_array();
			//echo $this->db->last_query(); exit;
			return $result;
		}
		
		
		public function Check_already_exist($table = '', $where = array(), $select = '')
		{
			if(empty($select)){
				$this->db->select('*');
				}else{
				$this->db->select($select);
			}
			
			if(!empty($where)){
				$this->db->where($where);
			}
			
			$result = $this->db->get($table);
			if($result->num_rows()>0)
			{
				return true;
			}
			else
			{
				return false;
			}
			
		}
        
        /**
			* -----------------------------------------
			* @Description : Change stats
			* ----------------------------------------
			* @param       : table(string/table name)
			* @param       : param(array/add data array)
			* @return      : row status
			* 
		*/
		
		public function Change_status($table = '',$where = array(),$select = '')
		{
			if(empty($select))
			{
				$this->db->select('*');
			}
			else
			{
				$this->db->select($select);
			}
			
			$this->db->where($where);
			$result = $this->db->get($table)->row_array();
			$status = $result[$select];			
			$status = $status?'0':"1";			
			$data=array($select => $status);
			$this->db->where($where);
			$this->db->update($table, $data);
			//echo $this->db->last_query(); exit;
			$affected_rows = $this->db->affected_rows(); 
			return $status;
			
		}
        
        /**
			* -----------------------------------------
			* @Description : all row from table
			* ----------------------------------------
			* @param       : table(string/table name)
			* @param       : param(array/add data array)
			* @return      : results
			* 
		*/
		public function Select_result($table = '', $where = "", $select = '', $page = 0, $page_size = 0, $order_by='', $order='')
		{ 
			if(empty($select)){
				$this->db->select('*');
				}else{
				$this->db->select($select);
			}
			
			if(!empty($where))
			{
				$this->db->where($where);
			}
			
			if(!empty($page) && !empty($page_size)){
				$limit = $page_size;
				$offset = $limit*($page-1);
				$this->db->limit($limit, $offset);
			}
			
			if($order_by && $order){
				$this->db->order_by($order_by, $order);
			}
			
			$result = $this->db->get($table)->result_array();
			//echo $this->db->last_query(); 
			return $result;
		}
		
		/**
			* -----------------------------------------
			* @Description : fetch one row data from table based on conditions
			* ----------------------------------------
			* @param       : table(string/table name)
			* @param       : where(array/where condition array)
			* @param       : select(string)
			* @param       : join(array/join format array('table'=>array(),'on'=>array(),'type'=>array()))
			* @return      : row_array
			* 
		*/
		public function Select_one_row($table = '', $where = array(), $select = '', $join = array())
		{  
			if(empty($select)){
				$this->db->select('*');
				}else{
				$this->db->select($select);
			}
			
			if(!empty($join)){
				foreach($join['table'] as $key => $j){
					$this->db->join($join['table'][$key], $join['on'][$key], $join['type'][$key]);
				}
			}
			
			if(!empty($where)){
				$this->db->where($where);
			}
			$result = $this->db->get($table)->row_array();
			//echo $this->db->last_query();
			return $result;
		}
		
		/**
			* -----------------------------------------
			* @Description : add data to table
			* ----------------------------------------
			* @param       : table(string/table name)
			* @param       : param(array/add data array)
			* @return      : insert_id(int)
			* 
		*/
		public function Add($table = '', $param = array()){  
			$this->db->insert($table, $param);
			$insert_id = $this->db->insert_id(); 
			return $insert_id;
		}
		
		/**
			* -----------------------------------------
			* @Description : update data to table with conditions
			* ----------------------------------------
			* @param       : table(string/table name)
			* @param       : where(array/where array for update)
			* @param       : param(array/param array to update)
			* @return      : affected row(int)
			* 
		*/
		public function Update($table = '', $where = array(), $param = array()){  
			$this->db->where($where);
			$this->db->update($table, $param);
			$affected_rows = $this->db->affected_rows(); 
			return $affected_rows;
            //echo $this->db->last_query(); die();
		}
		
		/**
			* -----------------------------------------
			* @Description : delete data from table with conditions
			* ----------------------------------------
			* @param       : table(string/table name)
			* @param       : where(array/where array for delete)
			* @return      : affected row(int)
			* 
		*/
		public function Delete($table = '', $where = array()){  
			$this->db->where($where);
			$this->db->delete($table);
			return $this->db->affected_rows();
		}
		
		/**
			* -----------------------------------------
			* @Description : count data from table with conditions
			* ----------------------------------------
			* @param       : table(string/table name)
			* @param       : where(array/where array for count)
			* @return      : affected row(int)
			* 
		*/
		public function Count($table = '', $where = array()){  
			if(!empty($where)){
				$this->db->where($where);
			}
			$result = $this->db->count_all_results($table);
			return $result;
		}
		/**
			* -----------------------------------------
			* @Description : add/edit slag with conditions
			* ----------------------------------------
			* @param       : table(string/table name)
			* @param       : where(array/where array for count)
			* @return      : affected row(int)
			* 
		*/		
		public function Slug($table = '',$where = '',$whereNot = array(), $slag = '',$slagID = '', $select = ''){
			$text = preg_replace('~[^\\pL\d]+~u', '-', $slag);
			$text = trim($text, '-');
			$text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
			$text = strtolower($text);
			$that_slug = preg_replace('~[^-\w]+~', '', $text);
			
			if(empty($select)){
				$this->db->select('*');
				}else{
				$this->db->select($select);
			}			
			$this->db->where($where,$that_slug);
			
			if(!empty($whereNot)){
				$this->db->where_not_in($whereNot);
			}
			
			$result = $this->db->get($table);
			if($result->num_rows()==0)
			{
				return $new_slug = $that_slug;
			}
			else
			{
				return $new_slug = $that_slug.'-'.$slagID;
			}
		}		
		
		/**
			* -----------------------------------------
			* @Description : fetch one row data from table based on conditions
			* ----------------------------------------
			* @param       : table(string/table name)
			* @param       : where(array/where condition array)
			* @param       : select(string)
			* @param       : join(array/join format array('table'=>array(),'on'=>array(),'type'=>array()))
			* @return      : row_array
			* 
		*/
		public function Select_not_in($table = '', $where = array())
		{  
			$table = $table;
            
            $varID = array_keys($where);
            $varFirst = $varID[0];
            $varSecond = $varID[1];
            $id = $where['id'];
            $sate_code = $where['state_code'];
            
            
            $this->db->select('*');
            $this->db->from($table);
            $this->db->where($varSecond, $sate_code);
            $this->db->where_not_in($varFirst, $id);
            $result = $this->db->get();
            //echo $this->db->last_query(); die();
            $result = $result->num_rows(); 
            
			//$result = $this->db->get($table)->row_array();
			//echo $this->db->last_query();
			return $result;
		}
				
		/**
			* -----------------------------------------
			* @Description : send email to user from admin
			* ----------------------------------------
			* @param       : to(string/to email)
			* @param       : subject(string/email subject)
			* @param       : param(array/data for email template)
			* @param       : template(string/email template)
			* @return      : affected row(int)
			* 
		*/
		public function Send_email($to,$from,$cc,$reply_to,$subject = '',$message,$attach='',$param = array(),$template){
			$config['protocol']        = 'sendmail';
			$config['mailpath']        = '/usr/sbin/sendmail';
			$config['charset']         = 'utf-8';
			$config['wordwrap']        = TRUE;
			$config['mailtype']        = 'html';
			$this->email->initialize($config);
			$path = 'fontend/resume/';
			$this->email->from($from[0],$from[1]);
			$this->email->to($to);
			$this->email->cc($cc);
			$this->email->reply_to($reply_to);
			$this->email->subject($subject);
			if(!empty($message)){
				$this->email->message($message);
			}else{
				$email_body = $this->load->view('email_templates/'.$template, $param ,TRUE);
				$this->email->message($email_body);
			}
			if(!empty($attach)){
				$this->email->attach('fontend/resume/' . $attach);	
			}
			$status     = $this->email->send();
			//echo $this->email->print_debugger();
			return $status;
		}
        
         /**
			* -----------------------------------------
			* @Description : get one row
			* ----------------------------------------
			* @param       : table(string/table name)
			* @param       : param(array/add data array)
			* @return      : row status
			* 
		*/
		
		function GetRows($params = array())
		{
			$this->db->select('*');
			$this->db->from($params['table']);
			$this->db->order_by('id','desc');
			
			if(array_key_exists("start",$params) && array_key_exists("limit",$params))
			{
				$this->db->limit($params['limit'],$params['start']);
			}
			elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params))
			{
				$this->db->limit($params['limit']);
			}
			
			$query = $this->db->get();
			
			return ($query->num_rows() > 0)?$query->result_array():FALSE;
		}
	}	