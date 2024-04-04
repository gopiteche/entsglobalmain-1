<?php

Error_reporting(0);

class CMS extends MY_Controller {
	
	function __construct()
	{
		parent::__construct();
	
	}
	
	//index	   
	public function DigitalTransformation()

	{   

	$data['seo'] = $this->Admin_model->fetch_single('seopage','seoid',11);
	
	$data['banner'] = $this->Admin_model->fetch_single('innbanners','ban_id',7);

 $data['digital'] = $this->Admin_model->fetch_single('content','content_id',4);


	$this->load->view('user/digital_transformation',$data);
		
	}	




	public function TermsAndConditions()
	{

		$data['seo'] = $this->Admin_model->fetch_single('seopage','seoid',2);
	
		$data['banner'] = $this->Admin_model->fetch_single('innbanners','ban_id',9);
	
		$data['cms'] = $this->Admin_model->fetch_single('content','content_id',8);

		$this->load->view('user/cms',$data);

	}





	public function PrivacyPolicy()
	{

		$data['seo'] = $this->Admin_model->fetch_single('seopage','seoid',2);
	
		$data['banner'] = $this->Admin_model->fetch_single('innbanners','ban_id',10);
	
		$data['cms'] = $this->Admin_model->fetch_single('content','content_id',7);

		$this->load->view('user/cms',$data);

	}














		
}
