<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Contact extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model(array('Common_model'));  
		$this->load->helper(array('url','captcha'));
		$this->load->library(array('session','user_agent','email'));
	}	
			
	public function index()
	{
		$data['title'] = "Contact Us";
		$data['pageID'] = 4;
		$this->load->view('contact',$data);
	}

	public function contact_form()
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
                   /* array(
                        'field' => 'subject',
                        'label' => 'Subject',
                        'rules' => 'required'
                        ),*/
                    array(
                        'field' => 'phone',
                        'label' => 'Phone',
                        'rules' => 'required|trim|integer'
                        ),
                     array(
                        'field' => 'message',
                        'label' => 'Message',
                        'rules' => 'required'
                        )
                      );
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$mobile = $this->input->post('phone');
		//$subject = $this->input->post('subject');
		$message = $this->input->post('message');
    
        $this->form_validation->set_rules($config);
        if($this->form_validation->run() == true)
        {
			$mailBody = '<div style="min-height:150px; background-size:100%; width:650px; border:1px solid #CCCCCC; box-shadow: 0 0 10px 8px rgba(0,0,0,0.3);">
					<div height:80px; padding-top:15px; padding-left:10px; font-size:18px;" align="left"  ></div><div style="font-size:12px; color:#666666; font-family:Arial, Helvetica, sans-serif; padding:0 20px 0 20px">
						User Contact with the following details :
								<table width="100%" border="0">
								  <tr>
									<td width="37%"><strong>Name:</strong></td>
									<td width="63%">'.$name.'</td>
								  </tr>
								  <tr>
									<td><strong>Phone : </strong></td>
									<td>'.$mobile.'</td>
								  </tr>
								  <tr>
									<td><strong>Email : </strong></td>
									<td>'.$email.'</td>
								  </tr>
								 
								  <tr>
									<td><strong>Message : </strong></td>
									<td>'.$message.'</td>
								  </tr>
								  <tr>
									<td><strong></strong></td>
									<td></td>
								  </tr>
								</table>
						<p>&nbsp;</p>	
					</div>
						<div style="font-size:12px; color:#666666; font-family:Arial, Helvetica, sans-serif; padding:0 20px 0 20px">
							<p style="border-top:1px solid #999999"></p>			
							<p>Thank you!</p>
							<p></p>
						</div>
					</div> 
					<div style="height:35px; color:#000" align="center"  >Copyright © brewbakeskolkata.com</div>	
				</div>';
			 
			 
			//load email library
			 
			 $to_email  = $this->Common_model->select_one_row('switch_settings', array('id' => 1));
			 $to_email = $to_email['config_val']; 
			 $from_email = $email;
			 //echo $mailBody;
			 //die();

			 $email_setting  = array('mailtype'=>'html');
			 $this->load->library('email');
			 $this->email->initialize($email_setting);
			
			 $this->email->from($from_email, $name); 
			 $this->email->to($to_email);
			 $this->email->subject('For Contact'); 
			 $this->email->message($mailBody); 
	   
			 //Send mail 
			 $this->email->send();
			 $this->session->set_flashdata("success_msg", "We will reach you shortly.");
			 redirect($_SERVER['HTTP_REFERER'], 'refresh');
		 }
		 else
		 {
		 	 $this->session->set_flashdata("error_msg", validation_errors());
             redirect($_SERVER['HTTP_REFERER'], 'refresh');  
		 }
	}
	
}
