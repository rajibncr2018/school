<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Creative extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model(array('Common_model'));  
		$this->load->helper(array('url','captcha'));
		$this->load->library(array('session','user_agent','email'));
	}	
			
	public function index()
	{
		$data['title'] = "Creative Studio";
		$this->load->view('creative',$data);
	}
	
}
