<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

  

  public function __construct()

    {
		
  parent::__construct();
		
		$this->load->model("Admin_model");

		$this->load->library('image_lib');
		
		$this->data = array(
            
   'admin_title' => 'ENTS Global',
            
			'admin_theme' => '#3eba39',

			//'admin_mail'  => 'techsofttest@gmail.com',
			
			'admin_mail'  => 'info@entsglobal.com',
			

      
			//Mail Settings
                
				/*
				'smail_protocol' => 'smtp',

				'smail_host' => 'smtp.titan.email',
	
				'smail_port' => '587',

				'smail_user' => 'support@entsglobal.com.au',
	
				'smail_pass' => '>C^r o]6%&sb7;4',
				*/
				
				
				
				'smail_protocol' => 'smtp',

				'smail_host' => 'smtp.zoho.com',
	
				'smail_port' => '587',

				'smail_user' => 'webinfo@entsglobal.com',
	
				'smail_pass' => 'Jul@2023',
				
				
				
				//
        );
        
   $data['contact'] = $this->Admin_model->fetch_single('contact','default',1);

			$data['default_seo'] = array(
					'm_title' => "Ents Global",
					'm_dis' => "",
					'm_key' => "",
			);


        //Common

        $data['all_services'] = $this->Admin_model->fetch_all_services();

        //$data['all_industries'] = $this->Admin_model->fetch_all_order('industries','industries_id','asc');
        $data['all_industries'] = $this->Admin_model->fetch_all_industries();

        //

        //Footer
		//$data['footer_about'] = $this->Admin_model->fetch_single('cms','id',2);
		//######



		
       $this->load->vars($data);
		
		
	   
    }
	
	
	
	
	
	
}