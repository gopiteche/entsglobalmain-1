<?php

Error_reporting(0);

class SiteMap extends MY_Controller {
	
	function __construct()
	{
		parent::__construct();
	
	}
	
	//index	   
	public function index()

	{   

	$data['seo'] = $this->Admin_model->fetch_single('seopage','seoid',2);
	
	$data['banner'] = $this->Admin_model->fetch_single('innbanners','ban_id',8);

	$this->load->view('user/sitemap',$data);
		
	}	






		
}
