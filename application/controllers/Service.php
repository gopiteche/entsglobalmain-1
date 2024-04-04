<?php

Error_reporting(0);

class Service extends MY_Controller {
	
	function __construct()
	{
		parent::__construct();
	
	}
	

	//index	   
	public function index($cat_slug="",$service_slug="")

	{   
	    $cond = array('category_slug'=>$cat_slug);
        $data['category']= $this->Admin_model->fetch_one_row('category',$cond);
		
		$data['service'] = $this->Admin_model->fetch_single('package','package_slug',$service_slug);
		if(!empty($data['service']))
		{
		   $this->load->view('user/service_detail',$data);
		}
		else
		{
			$this->load-> view('user/error404.php');
		}
	}	


		
}
