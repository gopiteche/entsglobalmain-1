<?php

Error_reporting(0);


defined('BASEPATH') OR exit('No direct script access allowed');

class Careers extends MY_Controller {

  public function __construct()

		{
			parent::__construct(); 
  }

	

	public function index()

	{

	$data['seo'] = $this->Admin_model->fetch_single('seopage','seoid',10);
	
	$data['banner'] = $this->Admin_model->fetch_single('innbanners','ban_id',4);

	$data['careers'] = $this->Admin_model->fetch_all_order('careers','career_id','desc');

 $this->load->view('user/careers',$data);

	}



	public function detail($slug)

	{

		if($_POST)
		{
			
			
//CAPTCHA SECTION GOOGLE

			//$r_url = $_SERVER['HTTP_REFERER']; 
			$recaptcha = $_POST['g-recaptcha-response'];
  
			// Put secret key here, which we get
			// from google console
			$secret_key = '6LeoPTEpAAAAAATYuIGx5i2yjmuBLddRpFFDu0hD';
		  
			// Hitting request to the URL, Google will
			// respond with success or error scenario
			$url = 'https://www.google.com/recaptcha/api/siteverify?secret='
				  . $secret_key . '&response=' . $recaptcha;
		  
			// Making request to verify captcha
			$verify_response = file_get_contents($url);
		  
			// Response return by google is in
			// JSON format, so we have to parse
			// that json
			$response = json_decode($verify_response);
		  
			// Checking, if response is true or not
			if ($response->success == true) {
				echo '<script>alert("Google reCAPTACHA verified")</script>';
			} else {

				$flashdata = array(
					'type' => 'error',
					'msg' => 'Captcha Verification Failed',
					);

				$this->session->set_flashdata('notification',$flashdata);	

				//redirect($r_url);
				redirect(base_url().'Careers');
			}
			

			if(!empty($_POST['email']))
			{

				redirect(base_url().'Careers');

			}

			$fullname = $this->input->post('name');

			$email = $this->input->post('email_r');

			$phone = $this->input->post('phone');

			$job = $this->input->post('job_post');

			$message = nl2br($this->input->post('messsage'));


			$color= $this->data['admin_theme'];

			$title=$this->data['admin_title'];
	
			$subject_mail ="Career Application | ".$job."";
	
			$heading = "You have a new Career Application";
	
			$logo_link = base_url().'assets/img/logoss.jpg';

			$attach_path = $_FILES['resume']['tmp_name'];
   $attach_name = $_FILES['resume']['name'];	
	
	
			$body='
	
					<style>
	
					</style>
	
	
	
					<table cellspacing="0" border="0" cellpadding="0" width="100%" bgcolor="#f2f3f8"
	
	
									<tr>
	
													<td>
	
																	<table style="background-color: #f2f3f8; max-width:670px;  margin:0 auto;" width="100%" border="0"
	
																					align="center" cellpadding="0" cellspacing="0">
	
																					<tr>
	
																									<td style="height:80px;">&nbsp;</td>
	
																					</tr>
	
																					<tr>
	
																									<td style="text-align:center;">
	
																											<a href="'.base_url().'" title="logo" target="_blank">
	
																													<img width="60" src="'.$logo_link.'" title="logo" alt="logo">
	
																											</a>
	
																									</td>
	
																					</tr>
	
																					<tr>
	
																									<td style="height:20px;">&nbsp;</td>
	
																					</tr>
	
																					<tr>
	
																									<td>
	
																													<table width="" border="0" align="center" cellpadding="0" cellspacing="0"
	
																																	style="table-layout: fixed;max-width:670px;background:#fff; border-radius:3px; text-align:center;-webkit-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);-moz-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);box-shadow:0 6px 18px 0 rgba(0,0,0,.06);">
	
												
	
																																	<tr style="background: #0064b0;color: #fff;">
	
																																					<td style="padding:0 35px;" colspan="3">
	
																																									<h1 style="color:#1e1e2d; font-weight:500; margin:0;font-size:32px;font-family:"Rubik",sans-serif;">'.$heading.'</h1>
	
																																									<span style="display:inline-block; vertical-align:middle; margin:29px 0 26px; border-bottom:1px solid #cecece; width:100px;"></span>
	
		
																																					</td>
	
																																	</tr>
																																	
																																	
																																	
																																	<tr style="font-size: 18px;background: #8080802b;">

																															  <th style="padding:10px 50px;" align="left"></th>
																															  <td style="width: 10%;"></td>
																															  <td align="left" style="width: 100%;"></td>

																										                        </tr>	
	
									
	
									
																																	<tr style="font-size: 18px;background: #8080802b">	
	
	
	
																																	<th style="padding:10px 50px;" align="left">Post</th>
																											
																											                        <td style="width: 10%;">:</td>
																											
																																	<td align="left" style="width: 100%;">'.$job.'</td>
																											
																																	
																											
																																	</tr>
																											
	
								
	
							
	
							<tr style="font-size: 18px;background: #8080802b">	
	
	
	
							<th style="padding:10px 50px;" align="left">Name</th>
	
	                        <td style="width: 10%;">:</td>
	
							<td align="left" style="width: 100%;">'.$fullname.'</td>
	
							
	
							</tr>
	
	
	
							
	
							<tr style="font-size: 18px;background: #8080802b">
	
							<th style="padding:10px 50px;" align="left">Email</th>
	                        <td style="width: 10%;">:</td>
							<td align="left" style="width: 100%;">'.$email.'</td>
	
							</tr>
	
							
	
							
	
						
	
							
	
							<tr style="font-size: 18px;background: #8080802b">
	
							<th style="padding:10px 50px;" align="left">Contact</th>
	                        <td style="width: 10%;">:</td>
							<td align="left" style="width: 100%;">'.$phone.'</td>
	
							</tr>
	
	
	
												
	
							<tr style="font-size: 18px;background: #8080802b">
	
							<th style="padding:10px 50px;"align="left">Message</th>
	                        <td style="width: 10%;">:</td>
							<td align="left" style="width: 100%;">'.$message.'</td>
	
							</tr>
	
	
																								            <tr style="font-size: 18px;background: #8080802b;">

																													  <th style="padding:10px 50px;" align="left"></th>
																													  <td style="width: 10%;"></td>
																													  <td align="left" style="width: 100%;"></td>

																													</tr>
																						
																																					
	
																																	
	
																													</table>
	
																									</td>
	
																					<tr>
	
																									<td style="height:20px;">&nbsp;</td>
	
																					</tr>
	
																					<tr>
	
																									<td style="text-align:center;">
	
																													<p style="font-size:14px; color:rgba(69, 80, 86, 0.7411764705882353); line-height:18px; margin:0 0 0;">&copy; <strong>'.$title.'</strong></p>
	
																									</td>
	
																					</tr>
	
																					<tr>
	
																									<td style="height:80px;">&nbsp;</td>
	
																					</tr>
	
																	</table>
	
													</td>
	
									</tr>
	
					</table>
	
				
			';
	
	
	
			// Codeignitor Mail Function
	
			
	
			$this->load->library('email');
	
				
	
				$config['protocol']     = $this->data['smail_protocol'];
		
				$config['smtp_host']    = $this->data['smail_host'];
		
				$config['smtp_port']    = $this->data['smail_port'];
		
				$config['smtp_timeout'] = '7';
				
				$config['smtp_crypto'] = 'tls';
		
		
				$config['smtp_user']    = $this->data['smail_user'];
		
				$config['smtp_pass']    = $this->data['smail_pass'];
		
				$config['mailtype'] = 'text'; // or html
		
				$config['validation'] = TRUE; // bool whether to validate email or not  
		
				
				$config['charset'] = 'utf-8';				 
		
				$config['newline'] = "\r\n";
		
				$config['crlf'] = "\r\n";
		
				$this->email->initialize($config);
		
				$this->email->from($this->data['smail_user'],''.$title.'');   
	
				$this->email->attach($attach_path,'attachment',$attach_name);  
						
				$this->email->to($this->data['admin_mail']);
					
				$this->email->subject($subject_mail);
	
				$this->email->message($body);                
	
				$this->email->set_newline("\r\n");
	
				$this->email->set_mailtype("html");
	
				//$this->email->send();
	
				if(!$this->email->send()){
	
					//show_error($this->email->print_debugger());
	
					$flashdata = array(
								'type' => 'error',
								'msg' => 'Unable To Send Message,Please Try Again Later',
					);
	
					$this->session->set_flashdata('notification',$flashdata);	
	
					}
	
	
					else
	
					
					{
					
					$flashdata = array(
							'type' => 'success',
							'msg' => 'Application submitted successfully',
					);
	
					$this->session->set_flashdata('notification',$flashdata);
	
					}


					redirect(base_url().'Careers');



		}


	$data['seo'] = $this->Admin_model->fetch_single('seopage','seoid',10);
	
	$data['banner'] = $this->Admin_model->fetch_single('innbanners','ban_id',4);

	$data['career'] = $this->Admin_model->fetch_single('careers','career_slug',$slug);
    if(!empty($data['career']))
	{
		 $this->load->view('user/career_detail',$data);
	}
    else
	{
		$this->load-> view('user/error404.php');
	}

	}



	
			
	
}