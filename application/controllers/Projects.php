<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Projects extends CI_Controller {



	function __construct()

	{

		parent::__construct();

		$this->load->model(array('Common_model'));  

		$this->load->helper(array('url','captcha'));

		$this->load->library(array('session','user_agent','email'));

	}	

			

	public function index()

	{

		$data['title'] = "Projects";

		$this->load->view('project',$data);

	}



	public function details()

	{

		$slug = $this->uri->segment(2); 

		$projects = $this->Common_model->select_one_row('switch_data',array('status' => 'Yes','type' => 'project','slug'=>$slug));





		$data['title'] = $projects['name'];

		$data['project_id'] = $projects['id'];

		$data['details'] = $projects;

		$this->load->view('project-details',$data);

	}

	

}

