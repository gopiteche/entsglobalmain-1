<?php
Error_reporting(0);
class Home extends MY_Controller {
	
	function __construct()
	{
		parent::__construct();
	}
	

	//index	   

	function index(){   

		if($_POST){
			
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
				redirect(base_url());
			}


		$name = $this->input->post('name');

		$contact = $this->input->post('number');

		$email = $this->input->post('email');

		$subject = $this->input->post('subject');

		$message = nl2br($this->input->post('message'));

		$color= $this->data['admin_theme'];

		$title = $this->data['admin_title'];

		$subject_mail ="Contact | ".$name."";

		$heading = "You have an Enquiry";

		$logo_link = base_url().'assets/img/logoss.jpg';


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

                                        <span

                                            style="display:inline-block; vertical-align:middle; margin:29px 0 26px; border-bottom:1px solid #cecece; width:100px;"></span>


                                    </td>

                                </tr>
								
								
						<tr style="font-size: 18px;background: #8080802b;">

								  <th style="padding:10px 50px;" align="left"></th>
								  <td style="width: 10%;"></td>
								  <td align="left" style="width: 100%;"></td>

						</tr>		

								

						<tr style="font-size: 18px;background: #8080802b">	

						<th style="padding:10px 50px;" align="left">Name</th>
                        <td style="width: 10%;">:</td>
						<td align="left" style="width: 100%;">'.$name.'</td>

						</tr>

						

						

						<tr style="font-size: 18px;background: #8080802b">

						<th style="padding:10px 50px;" align="left">Email  </th>
                         <td style="width: 10%;"> : </td>
						<td align="left" style="width: 100%;">'.$email.'</td>

						</tr>

						

						<tr style="font-size: 18px;background: #8080802b">

						<th style="padding:10px 50px;" align="left">Contact</th>
                        <td style="width: 10%;">: </td>
						<td align="left" style="width: 100%;">'.$contact.'</td>

						</tr>




						<tr style="font-size: 18px;background: #8080802b">

						<th style="padding:10px 50px;" align="left">Subject   </th>
                         <td style="width: 10%;">:</td>
						<td align="left" style="width: 100%;">'.$subject.'</td>

						</tr>

						

						<tr style="font-size: 18px;background: #8080802b">

						<th style="padding:10px 50px;" align="left">Message  </th>
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

					
			$this->email->to($this->data['admin_mail']);
				
			$this->email->subject($subject_mail);

			$this->email->message($body);                

			$this->email->set_newline("\r\n");

			$this->email->set_mailtype("html");

			//$this->email->send();

			if(!$this->email->send()){

				//show_error($this->email->print_debugger());
				//exit();

				$flashdata = array(
							'type' => 'error',
							'msg' => 'Unable to send message,Please try again later',
				);

				$this->session->set_flashdata('notification',$flashdata);	

				}

				else

				{
				
				$flashdata = array(
						'type' => 'success',
						'msg' => 'Enquiry sent successfully',
				);

				$this->session->set_flashdata('notification',$flashdata);

				}

				redirect(base_url());


		}

		$data['banners']	=	$this->Admin_model->getAll_bystatus();

		$data['seo']=$this->Admin_model->fetch_single('seopage','seoid',1);

		$data['about'] = $this->Admin_model->fetch_single('content','content_id',2);

		$data['digital'] = $this->Admin_model->fetch_single('content','content_id',4);

		//$data['industries'] = $this->Admin_model->fetch_all_order('industries','industries_id','asc');
		$data['industries'] = $this->Admin_model->getAll_Industries_by_status();

		//$data['services'] = $this->Admin_model->fetch_all_order('category','category_id','asc');
		$data['services'] = $this->Admin_model->getAll_by_Catstatus();

		$data['blogs'] = $this->Admin_model->fetch_order_limit('blog','cdate','desc',3);

		$this->load->view('user/index',$data);
		
	}	


		
}
