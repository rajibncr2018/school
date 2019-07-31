<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Booking extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model(array('Common_model'));  
		$this->load->helper(array('url','captcha'));
		$this->load->library(array('session','user_agent','email'));
	}	
			
	public function index()
	{
		$data['title'] = "Booking Studio";
		$this->load->view('booking',$data);
	}

	public function booking_confirm()
	{
		$config = array(
                    array(
                        'field' => 'name',
                        'label' => 'Name',
                        'rules' => 'required'
                        ),
                    array(
                        'field' => 'email',
                        'label' => 'Email',
                        'rules' => 'required|trim|required|valid_email'
                        ),
                    array(
                        'field' => 'phone',
                        'label' => 'Phone',
                        'rules' => 'required|regex_match[/^[0-9]{10}$/]'
                        ),
                     array(
                        'field' => 'slot_date',
                        'label' => 'Date',
                        'rules' => 'required'
                        ),
                     array(
                        'field' => 'slot[]',
                        'label' => 'Booking Slot',
                        'rules' => 'required'
                        )
                      );
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$phone = $this->input->post('phone');
		$slot_date = $this->input->post('slot_date');
		$slot = $this->input->post('slot');
    
        $this->form_validation->set_rules($config);
        if($this->form_validation->run() == true)
        {
			$save_data['name'] = $name;
			$save_data['email'] = $email;
			$save_data['phone'] = $phone;
			$save_data['booking_date'] = date('Y-m-d', strtotime($slot_date));
			$save_data['booking_slot'] = json_encode($slot);
			$save_data['create_date'] = date('Y-m-d h:m:s');
			$save_data['update_date'] = date('Y-m-d h:m:s');
			
			$insert = $this->Common_model->Add('switch_booking',$save_data);
			if($insert)
			{
				//send message
				$url = "http://alerts.variforrm.in/api?method=sms.normal&api_key=a4fbb59dd4e0b5a6758dfde8bbb4d887&to=".$phone."&sender=ORNGPR&message=We recived your request we will confirm you shothly. Thank You Orange Team&flash=0&unicode=0";
		        $ch = curl_init();
		        $curlConfig = array(
		            CURLOPT_URL            => $url,
		            CURLOPT_POST           => true,
		            CURLOPT_RETURNTRANSFER => true,
		            CURLOPT_POSTFIELDS     => array()
		        );
		        curl_setopt_array($ch, $curlConfig);
		        $result = curl_exec($ch);
		        curl_close($ch);

				$this->session->set_flashdata("success_msg", "Your booking has being confirm.");
				redirect($_SERVER['HTTP_REFERER'], 'refresh');
			}
			else
			{
				$this->session->set_flashdata("error_msg", "Somthing wrong please try again later.");
				redirect($_SERVER['HTTP_REFERER'], 'refresh');
			}
		}
		else
		{
			$this->session->set_flashdata("error_msg", validation_errors());
			redirect($_SERVER['HTTP_REFERER'], 'refresh');
		}
	}
	
}
