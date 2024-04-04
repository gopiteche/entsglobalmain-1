<?php

Error_reporting(0);
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CK extends MY_Controller {
		// construct
        public function __construct()
		{
				parent::__construct();
				$this->load->database();
    $this->load->library('form_validation');
				$this->load->helper(array('form', 'url', 'text'));
                $this->load->model("Admin_model");				
				$this->load->library('session');
				$this->load->library('image_lib');
				if(!$this->session->userdata('adminId'))
				{
					redirect(base_url().'admin/login');	
				}	
			
        }		
		
		   
				
		
	  public function ImageUpload()
	  {
	  
	  
	  
	  $_FILES['upload'];

	  $filename = rand().$_FILES["upload"]["name"]; 

      $tempname = $_FILES["upload"]["tmp_name"];     

      $folder = "application/views/admin/includes/uploads/".$filename; 

      if (move_uploaded_file($tempname, $folder))  { 

	  
      $msg = base_url().$folder; 

      }else{ 

      $msg = ""; 

      }  

	  $response= array('url'=> $msg);

      echo json_encode($response); 
	  
	  
	  }
		
		
		
		
		
		
		
		
		
		
		
		
		
		    			
}