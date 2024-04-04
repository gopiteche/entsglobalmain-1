<?php

Error_reporting(0);

class Custom404 extends MY_Controller {
	
	function __construct()
	{
		parent::__construct();
	
	}
	
	//index	   
	public function index()
	{
 
		$this->output->set_status_header('404'); 
		$this->load->view('user/error404');
 
    }





		
}
