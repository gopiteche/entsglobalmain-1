<?php

Error_reporting(0);

class Blogs extends MY_Controller {
	
	function __construct()
	{

		parent::__construct();

		$this->load->library('pagination');
	
	}
	

	//index	   

	public function index($rowno=0)

	{   
		
	$data['seo'] = $this->Admin_model->fetch_single('seopage','seoid',9);
	
	$data['banner'] = $this->Admin_model->fetch_single('innbanners','ban_id',5);

	$rowperpage = 6;

	if($rowno != 0){
	$rowno = ($rowno-1) * $rowperpage;
	}


	$data['blogs'] = $this->Admin_model->fetch_blogs_paginate($rowno,$rowperpage,FALSE);

	$total_count =  $this->Admin_model->fetch_blogs_paginate($rowno,$rowperpage,TRUE);

	$config['base_url'] = base_url().'Blogs/';

	$config['use_page_numbers'] = TRUE;
	$config['total_rows'] = $total_count;
	$config['reuse_query_string']= TRUE;
	$config['per_page'] = $rowperpage;

	$this->pagination->initialize($config);

	$data['pagination'] = $this->pagination->create_links();

	$data['row'] = $rowno;

	$data['per_page'] = $rowperpage;

	$this->load->view('user/blogs',$data);
		
	}	



	public function detail($blog_slug)
	{

		$data['seo'] = $this->Admin_model->fetch_single('seopage','seoid',9);
		
		$data['banner'] = $this->Admin_model->fetch_single('innbanners','ban_id',5);

		$data['blog'] = $this->Admin_model->fetch_single('blog','blog_slug',$blog_slug);
		
		$data['related'] = $this->Admin_model->fetch_related_blogs($blog_slug);
        if(!empty($data['blog']))
		{
		    $this->load->view('user/blog_detail',$data);
		} 
        else
		{
			$this->load-> view('user/error404.php');
		}

	}




		
}
