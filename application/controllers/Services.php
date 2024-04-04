<?php

Error_reporting(0);

class Services extends MY_Controller {
	
	function __construct()
	{
		parent::__construct();
	
	}
	
	//index	   
	public function index()

	{   

	$data['seo'] = $this->Admin_model->fetch_single('seopage','seoid',4);
	
	$data['banner'] = $this->Admin_model->fetch_single('innbanners','ban_id',1);

 $data['focus'] = $this->Admin_model->fetch_single('content','content_id',6);

	//$data['services'] = $this->Admin_model->fetch_all_order('category','category_id','asc');
	$data['services'] = $this->Admin_model->getAll_by_Catstatus();

	$this->load->view('user/services',$data);
		
	}	



	public function detail($cat_slug)
	{
       $data['service'] = $this->Admin_model->fetch_single('category','category_slug',$cat_slug);
	   if(!empty($data['service']))
	    {
			$category_id =  $data['service']['category_id'];
			$data['sub_services'] = $this->Admin_model->fetch_all_order_cond('package','package_id','asc',array('package_parent_id' =>$category_id));
			$this->load->view('user/service_main',$data);
	    }
	    else
		{
		   $this->load-> view('user/error404.php');
	    }



	}




		
}
