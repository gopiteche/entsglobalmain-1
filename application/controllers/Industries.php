<?php

Error_reporting(0);

class Industries extends MY_Controller {
	
	function __construct()
	{
		parent::__construct();
	
	}
	
	//index	   
	public function index()

	{   

	$data['seo'] = $this->Admin_model->fetch_single('seopage','seoid',3);
	
	$data['banner'] = $this->Admin_model->fetch_single('innbanners','ban_id',2);

	//$data['industries'] = $this->Admin_model->fetch_all_order('industries','industries_id','asc');
	$data['industries'] = $this->Admin_model->getAll_Industries_by_status();

	$this->load->view('user/industries',$data);
		
	}	


	public function detail($ind_slug)
	{

		$data['industry'] = $this->Admin_model->fetch_single('industries','slug',$ind_slug);
		
        if(!empty($data['industry']))
		{
            $this->load->view('user/industry_detail',$data);
		}
		else
		{
			$this->load-> view('user/error404.php');
		}

	}



		
}
