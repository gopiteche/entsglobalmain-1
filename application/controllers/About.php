<?php

Error_reporting(0);

class About extends MY_Controller {
	
	function __construct()
	{
		parent::__construct();

	}
	
	//index	   
	function index()
	{   

		$data['seo']=$this->Admin_model->fetch_single('seopage','seoid',2);

		$data['about'] = $this->Admin_model->fetch_single('content','content_id',1);

		$data['banner'] = $this->Admin_model->fetch_single('innbanners','ban_id',3);

		$this->load->view('user/about',$data);
		
	}	



	public function WhatWeFocus()
	{

		$data['seo']=$this->Admin_model->fetch_single('seopage','seoid',12);

		$data['focus'] = $this->Admin_model->fetch_single('content','content_id',2);

		$data['banner'] = $this->Admin_model->fetch_single('innbanners','ban_id',11);

		$this->load->view('user/what_we_focus',$data);

	}



		
}
