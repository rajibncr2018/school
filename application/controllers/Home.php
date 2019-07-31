<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model(array('Common_model'));  
		$this->load->helper(array('url','captcha'));
		$this->load->library(array('session','user_agent','email'));
	}	
			
	public function index()
	{
		$data['title'] = "Home";
		/*$data['banner'] = $this->Common_model->select('cvs_data',array('status' => 'Yes','type' => 'banner'),'','','','','id','DESC');
		$data['whychose'] = $this->Common_model->select('cvs_data',array('status' => 'Yes','type' => 'about1'),'','','','','id','DESC');
		$data['newproducts'] = $this->Common_model->select('cvs_data',array('status' => 'Yes','type' => 'product'),'','','1','6','id','DESC');
		$data['products'] = $this->Common_model->select('cvs_data',array('status' => 'Yes','type' => 'product'),'','','1','8','id','DESC');
		$data['testi'] = $this->Common_model->select('cvs_data',array('status' => 'Yes','type' => 'testimonial'),'','','','','id','DESC');
		$data['country'] = $this->Common_model->select('cvs_data',array('status' => 'Yes','type' => 'country'),'','','','','id','DESC');*/
		$this->load->view('index',$data);
	}

	public function ajaxcall()
	{
		$id = $_POST['id'];
		$where = "status = 'Yes' AND id = '".$id."'";
		$value = $this->Common_model->select_one_row('cvs_data', $where);
		$jsonData = json_decode($value['json_data']);
		$data['jsonData'] = $jsonData->description;	
		$this->load->view('ajax-modal',$data);
	}
	
}
