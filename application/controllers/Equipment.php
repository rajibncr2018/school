<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Equipment extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model(array('Common_model'));  
		$this->load->helper(array('url','captcha'));
		$this->load->library(array('session','user_agent','email'));
	}	
			
	public function index()
	{
		$data['title'] = "Equipment";
		$this->load->view('equipment',$data);
	}
	
}
